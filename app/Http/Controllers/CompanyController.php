<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Job;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //
    
public function test()
{
    return view('company.home');
}


public function about()
{
    return View('company.about');
}
public function contact()
{
    return View('company.contact');
}

//show all jobs by company login 
    public function index()
    {//'company')
        //auth()->guard('company')->user()->id;
        $companyId =auth('company')->id();
    // Perform a join to retrieve job listings with associated company names
    $jobs = Job::select('jobs.*', 'companies.name as name','companies.logo as logo')
        ->join('companies', 'jobs.id_company', '=', 'companies.id')
        ->where('jobs.id_company',$companyId)
        ->latest()
        ->filter(request(['tag', 'search']))
        ->paginate(6);

    return view('company.index', [
        'jobs' => $jobs,
    ]);
    }
    
    public function createjob()
    {
        return View('company.create');
    }

    public function jobstore(Request $request)
    {
        //dd($request);
        $request->validate([
            
            'title' => 'required',
            'location' => 'required',
            'email' => 'required',
            'website' => 'required',
            'tags' => 'required',
            'description_job' => 'required',
            
        ]);
        $insert_job = new Job();
        $insert_job->title = $request->input('title');
        $insert_job->tags = $request->input('tags');
        $insert_job->location = $request->input('location');
        $insert_job->email = $request->input('email');
        $insert_job->website = $request->input('website');
        $insert_job->description_job = $request->input('description_job');
        $insert_job->id_company=auth('company')->user()->id;

        
        

        $insert_job->save();
       
        return redirect()->route('company.index')->with('message', 'Jobs created successfully');
    }
    


    public function edit(string $id)
    {
        return View('company.edit', [
            'item' => Job::findOrFail($id)
        ]);
    }
    public function update(Request $request, string $id)
    {

        //dd($request->file('logo'));
        $request->validate([
            
            'title' => 'required',
            'location' => 'required',
            'email' => 'required',
            'website' => 'required',
            'tags' => 'required',
            'description_job' => 'required',
            
        ]);

        
        $insert_job = Job::findOrFail($id);
        $insert_job->title = $request->input('title');
        $insert_job->tags = $request->input('tags');
        $insert_job->location = $request->input('location');
        $insert_job->email = $request->input('email');
        $insert_job->website = $request->input('website');
        $insert_job->description_job = $request->input('description_job');
        $insert_job->id_company=auth('company')->user()->id;

        

        $insert_job->save();
        return redirect()->route('company.show', ['id' => $id])->with('message', 'Listing Updated successfully');
        // back()->with('message', 'Listing created successfully');
    }


    public function destroy(string $id)
    {
        //
        $to_delete= Job::findOrFail($id);
        $to_delete->delete();
        return redirect()->route('company.index');
    }


    public function show($id)
{ 
    $companyId = auth()->guard('company')->user()->id;
    $item = Job::select('jobs.*', 'companies.name as name','companies.logo as logo')
                ->join('companies', 'jobs.id_company', '=', 'companies.id')
                ->where('jobs.id_company',$companyId)
                ->where('jobs.id',$id)
                ->first();

    if ($item) {
        return view('company.show', [
            'item' => $item,
        ]);
    } else {
        abort(404);
    }
}
















    

    

    public function login()
    {
        return view('company.login');
    }
public function register()
    {
        return view('company.register');
    }
    public function store(Request $request)
    {
       // dd($request->file('logo'));
        //dd($request);
        // Validate the input fields
        $request->validate([
            'name' => 'required',
            'logo' => 'image|max:2048',
            'location' => 'required',
            'email' => 'required', // Assuming 'companies' is your company table
            'password' => 'required',
            'website' => 'required',
            'description_company' => 'required',
             // Validate the logo field as an image (max 2MB)
        ]);

        // Create a new Company instance
        $company = new Company();

        // Set other company details
        $company->name = $request->input('name');
        $company->location = $request->input('location');
        $company->email = $request->input('email');
        $company->website = $request->input('website');
        $company->description_company = $request->input('description_company');

        // Set the password
        $company->password = bcrypt($request->input('password')); // Hash the password

        // Handle the logo upload
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos','public');
            $company->logo = Storage::url($logoPath);
           // $company->logo = 'storage/' . str_replace('public/', '', $logoPath);
            //dd($logoPath);
        }

        // Save the company to the database
        // Save the company to the database
        $company->save();

        // Log in the newly registered company
        //Auth::login($company);

        // Redirect to a success page or perform any other necessary actions
        return redirect('/company/login')->with('message', 'Company registered and logged in');
    }



    public function logout(Request $request)
    {
        Auth::guard('company')->logout(); // Logout the company using the 'company' guard
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/company/home')->with('message', 'You have been logged out');
    }

    // Other methods in your CompanyController...



    public function authenticate(Request $request)
    {
        // Validate the input fields
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to authenticate the company
        if (Auth::guard('company')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            // If authentication is successful, regenerate the session and redirect
            $request->session()->regenerate();
            return redirect('/company/index')->with('message', 'You are now logged in');
        }

        // If authentication fails, return back with an error message
        return back()
            ->withErrors(['email' => 'Invalid credentials'])
            ->withInput($request->only('email'));
    }

    // Other methods in your CompanyController...
}
