<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobCategory;
use App\Models\Job;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:user']);
    }
    public function checkauth()
    {
        $user = auth()->user();
        return $user;
    }

    public function userdash(){
        return view('user.dashboard');
    }
    public function newJob(){
        return view('user.jobs.create-new-job');
    }
   
    public function allJobs()
    {
       
            $jobs = Job::where->id();
     
        return view('user.jobs.alljobs', compact('jobs'));
    }

}