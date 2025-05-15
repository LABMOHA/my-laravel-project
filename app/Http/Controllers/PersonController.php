<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;
use App\Models\Person;

class PersonController extends Controller
{
    //static view 
    public function main()
    {
        return view('person.home_static');
    }

    public function about()
    {
        return view('person.about_static');
    }
    public function contact()
    {
        return view('person.contact');
    }







    //show all jobs
    public function index()
    {
        
        $jobs =Job::select('jobs.*', 'companies.name as name','companies.logo as logo')
        ->join('companies', 'jobs.id_company', '=', 'companies.id')
        ->latest()
        ->filter(request(['tag', 'search']))
        ->paginate(6);
        return view('person.index', [
            'jobs' => $jobs,
        ]);
    }
    //show one job
    public function show($id)
    {
        $item = Job::select('jobs.*', 'companies.name as name','companies.logo as logo')
                ->join('companies', 'jobs.id_company', '=', 'companies.id')
                ->where('jobs.id',$id)
                ->first();
        if ($item) {
            return view('person.show', [
                'item' => $item,

            ]);
        } else {
            abort('404');
        }
    }



    public function register()
    {
        return view('person.register');
    }

    public function login()
    {
        return view('person.login');
    }



    public function str(Request $request)
    {
    
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            ]);

        // Create a new Company instance
        $person = new Person();

        // Set other company details
        $person->name = $request->input('name');
        $person->email = $request->input('email');

        // Set the password
        $person->password = bcrypt($request->input('password')); // Hash the password

        

        // Save the person to the database
        $person->save();

        // Log in the newly registered company
        //Auth::login($company);

        // Redirect to a success page or perform any other necessary actions
        return redirect('/person/login')->with('message', 'person registered  you need to login');
    }



    public function logout(Request $request)
    {
        Auth::guard('person')->logout(); // Logout the company using the 'company' guard
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('message', 'You have been logged out');
    }
    public function authenticate(Request $request)
    {
        // Validate the input fields
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to authenticate the company
        if (Auth::guard('person')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            // If authentication is successful, regenerate the session and redirect
            $request->session()->regenerate();
            return redirect('/findjob')->with('message', 'You are now logged in');
        }

        // If authentication fails, return back with an error message
        return back()
            ->withErrors(['email' => 'Invalid credentials'])
            ->withInput($request->only('email'));
    }








    
    

}
