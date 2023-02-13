<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
    public function allJobCategories(){
        $jobcategories=JobCategory::all()
        return view('user.jobs.create-new-job')->compact(jobcategory $jobcategories);
    }

}