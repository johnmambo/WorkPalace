<?php

namespace App\Http\Controllers\Freelancer;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;
use App\Models\JobCategory;
use Illuminate\Support\Facades\Auth;

class FreelancerController extends Controller
{

    public function freelancerdash()
    {
       
        $user = Auth::user();

        $activejobs = Job::all();



        $completejobs = Job::where([
                            ['id', $user->id],
                            ['status', 'complete']
                            ])->get();        
        
        $alljobs = Job::all();
        

        return view('freelancer.dashboard', compact('activejobs', 'completejobs', 'alljobs'));
    }
   
    public function allJobs(){
        
        $jobs = Job::all();  

        return view('freelancer.jobs.alljobs', compact('jobs'));
    }

    public function singlejob($id){

        $job = Job::findOrFail($id);
       

        return view('freelancer.jobs.singlejob', compact('job'));
    }
    public function completejobs(){
        
        $user = Auth::user();

        $jobs = Job::where([
                            ['id', $user->id],
                            ['status', 'complete']
                            ])->get();

        return view('freelance.jobs.compeletejobs', compact('jobs'));
    }
}
