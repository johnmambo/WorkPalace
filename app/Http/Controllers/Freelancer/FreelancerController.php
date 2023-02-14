<?php

namespace App\Http\Controllers\Freelancer;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

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
        return view('freelancer.dashboard');
    }
    public function allJobs()
    {

        $user = Auth::user();
        $userId = $user->id;
        $jobs = Job::where('user_id', $userId)->get();

        return view('user.jobs.alljobs', compact('jobs'));
    }
}
