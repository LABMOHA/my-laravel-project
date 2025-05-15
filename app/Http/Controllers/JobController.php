<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listign;
use App\Models\Job;
use App\Models\Person;
use Illuminate\Support\Facades\Storage;


class JobController extends Controller
{

// JobController.php



























    //show all jobs
    public function index()
    {
        //dd(request()->tag);
        return view(
            'jobs.index',
            [
                'heading' => 'Hallo',
                'listings' => Listign::latest()->filter(request(['tag', 'search']))->paginate(6)
            ]
        );
    }
    //show one job
    public function show($id)
    {
        $item = Listign::find($id);
        if ($item) {
            return view('jobs.show', [
                'item' => $item,

            ]);
        } else {
            abort('404');
        }
    }

    //show create form
    public function create()
    {
        return View('jobs.create');
    }



    public function store(Request $request)
    {
        //dd($request->file('logo'));
        $request->validate([
            'company' => 'required',
            'title' => 'required',
            'location' => 'required',
            'email' => 'required',
            'website' => 'required',
            'tags' => 'required',
            'description' => 'required',
            'logo' => 'image|max:2048', // Validate the logo field as an image (max 2MB)
        ]);

        //Listign::create($formfield);
        $insert_job = new Listign();
        $insert_job->title = $request->input('title');
        $insert_job->tags = $request->input('tags');
        $insert_job->company = $request->input('company');
        $insert_job->location = $request->input('location');
        $insert_job->email = $request->input('email');
        $insert_job->website = $request->input('website');
        $insert_job->description = $request->input('description');

        // Handle the logo upload
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('public/logos');
            $insert_job->logo = Storage::url($logoPath);
        }

        $insert_job->save();
        return redirect()->route('jobs.storejob')->with('message', 'Listing created successfully');
    }


    //show create a new job form 
    // public function create()
    // {
    //     return View('jobs.create');

    // }
    // public function edit(Listign $list)
    // {
    //     return View('list.edit',['item'=>$lit]);
    // }

    public function edit(string $id)
    {
        return View('jobs.edit', [
            'item' => Listign::findOrFail($id)
        ]);
    }

    public function update(Request $request, string $id)
    {

        //dd($request->file('logo'));
        $request->validate([
            'company' => 'required',
            'title' => 'required',
            'location' => 'required',
            'email' => 'required',
            'website' => 'required',
            'tags' => 'required',
            'description' => 'required',
            'logo' => 'image|max:2048', // Validate the logo field as an image (max 2MB)
        ]);

        //Listign::create($formfield);
        $insert_job = Listign::findOrFail($id);
        $insert_job->title = $request->input('title');
        $insert_job->tags = $request->input('tags');
        $insert_job->company = $request->input('company');
        $insert_job->location = $request->input('location');
        $insert_job->email = $request->input('email');
        $insert_job->website = $request->input('website');
        $insert_job->description = $request->input('description');

        // Handle the logo upload
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('public/logos');
            $insert_job->logo = Storage::url($logoPath);
        }

        $insert_job->save();
        return redirect()->route('jobs.show', ['id' => $id])->with('message', 'Listing Updated successfully');
        // back()->with('message', 'Listing created successfully');
    }
    public function destroy(string $id)
    {
        //
        $to_delete= Listign::findOrFail($id);
        $to_delete->delete();
        return redirect()->route('jobs.index');
    }
    public function test()
    {
        return view('company.home');
    }
}
