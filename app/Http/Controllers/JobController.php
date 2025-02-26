<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Job;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        if(!Auth::guest()){
            if(!Auth::user()->employer){
                return redirect('/organization');
            }
        }
        //
        $jobs = Job::with('employer', 'tags')
        ->latest()
        ->paginate(10);
       
        $futuredJobs = Job::with('employer', 'tags')
        ->latest()
            ->where('featured', 1)->orderByDesc('id')->take(3)->get();
        $tags = Tag::all();
        return view('job.index', ['jobs' => $jobs, 'tags' => $tags, 'futuredJobs' => $futuredJobs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJobRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }
}
