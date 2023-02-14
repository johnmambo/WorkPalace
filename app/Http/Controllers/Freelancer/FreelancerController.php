<?php

namespace App\Http\Controllers\Freelancer;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;
use App\Models\JobCategory;
use Illuminate\Support\Facades\Auth;

class FreelancerController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['auth', 'role:freelancer']);
    // }
    // public function checkauth()
    // {
    //     $user = auth()->user();
    //     return $user;
    // }
    public function freelancerdash()
    {
       
        $user = Auth::user();

        $jobs = Job::where([
                            ['id', $user->id],
                            ['status', 'active']
                            ])->get();

        return view('freelancer.dashboard', compact('jobs'));
    }
    public function allJobs(){
        
        $jobs = Job::all();  

        return view('freelancer.jobs.alljobs', compact('jobs'));
    }

    public function singlejob(){
        return view('freelancer.jobs.singlejob');
    }
    public function completejobs(){
        
        $user = Auth::user();

        $jobs = Job::where([
                            ['id', $user->id],
                            ['status', 'active']
                            ])->get();

        return view('freelance.jobs.compeletejobs', compact('jobs'));
    }
}
