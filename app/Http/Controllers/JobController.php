<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::all();
        return view('content.pages.jobs.index', compact('jobs'));
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'job_name' => 'required|string|max:255',
        ]);

        Job::create($request->all());
        return redirect()->route('job.index')->with('success', 'Job created successfully.');
    }

    public function show(Job $job)
    {
        return view('job.show', compact('job'));
    }

    public function edit(Job $job)
    {
        return view('jobs.edit', compact('job'));
    }

    public function update(Request $request, Job $job)
    {
        $request->validate([
            'job_name' => 'required|string|max:255',
        ]);

        $job->update($request->all());
        return redirect()->route('job.index')->with('success', 'Job updated successfully.');
    }

    public function destroy(Job $job)
    {
        $job->delete();
        return redirect()->route('job.index')->with('success', 'Job deleted successfully.');
    }
}
