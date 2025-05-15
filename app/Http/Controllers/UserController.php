<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Job;
use App\Models\Person;

class UserController extends Controller
{
    //
    
    
    


    public function _admin()
    {  

        
    $company = Company::select('*')
        ->latest()
        ->paginate(6);

        $count_Company = Company::count();   
        $count_person=Person::count();
        $count_job=Job::count();

        return view('_admin.index', [
        'company' => $company,
        'count_c'=>$count_Company,
        'count_p'=>$count_person,
        'count_j'=>$count_job
    ]);


    }



    //show form register
    // public function add()
    // {
    //     return view('_admin.add');
    // }
    public function login()
    {
        return view('_admin.login');
    }

    




    //add admin
    public function store(Request $request)
    { // Validate the input fields
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users', // Assuming 'users' is your user (company) table
            'password' => 'required',
        ]);

        // Create a new User (Company) instance
        $user = new User();

        // Set the name and email as plain text
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        // Hash and set the password using bcrypt
        $user->password = bcrypt($request->input('password'));

        // Save the user to the database
        $user->save();

        // Log in the newly registered user
        //auth()->login($user);

        // Redirect to a success page or perform any other necessary actions
        return redirect('/admin')->with('message', 'admin created and logged in');
    }


    //logout
    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/main')->with('message', 'You have been logged out');
    }




    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (auth()->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            $request->session()->regenerate();
            return redirect('/admin')->with('message', 'You are now login');
        }
        return back()
            ->withErrors(['email' => 'Invalid credentials'])
            ->withInput($request->only('email'));
    }

    //destroy company
    public function supp(string $id)
    {
        //
        $to_delete= Company::find($id);
        $to_delete->delete();
        return redirect()->route('_admin.index');
    }


    //destroy job
    public function delete_job(string $id)
    {
        $to_delete=Job::find($id);
        $to_delete->delete();
        return redirect()->route('_admin.jobs');
    }


    // public function help()
    // {
    //     return Vie
    // }

//show jobs
    public function jobs()
    {
        
        $jobs =Job::select('jobs.*', 'companies.name as name','companies.logo as logo')
        ->join('companies', 'jobs.id_company', '=', 'companies.id')
        ->latest()
        ->paginate(2);
        return view('_admin.jobs', [
            'jobs' => $jobs,
        ]);
    }







    public function  persons()
    {
        $persons=Person::select('*')
        ->latest()
        ->paginate(2);
        return view('_admin.users',[
            'persons'=>$persons,
        ]);

    }
    //destroy person
    public function delete_person(string $id)
    {
        $to_delete=Person::find($id);
        $to_delete->delete();
        return redirect()->route('_admin.users');
    }
}
