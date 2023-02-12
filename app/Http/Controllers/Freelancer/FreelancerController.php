<?php

namespace App\Http\Controllers\Freelancer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FreelancerController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:freelancer']);
    }
    public function checkauth()
    {
        $user = auth()->user();
        return $user;
    }
    public function freelancerdash(){
        return view('freelancer.dashboard');
    }
}