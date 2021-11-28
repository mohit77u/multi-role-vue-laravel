<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    
    public function index(){
        return Job::all();
    }

    
    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'skills' => 'required',
            'url' => 'required',
            'positions' => 'required',
            'experience' => 'required',
            'summary' => 'required',
            'responsibility_one' => 'required',
            'responsibility_two' => 'required',
            'responsibility_three' => 'required',
            'responsibility_four' => 'required',
            'responsibility_five' => 'required',
            'requirements_one' => 'required',
            'requirements_two' => 'required',
            'requirements_three' => 'required',
            'requirements_four' => 'required',
        ]);

        Job::create($request->all());

        return response(['message' => 'Job created Successfully !!'], 200);
    }

    
    public function show(Job $job){
        return $job;
    }

 
    public function update(Request $request, Job $job){
        
        $job->fill($request->post())->save();

        return response(['message' => 'Job updated Successfully !!'], 200);
    }

    
    public function destroy(Job $job){
        $job->delete();
        return response(['message' => 'Job deleted Successfully !!'], 204);
    }
}