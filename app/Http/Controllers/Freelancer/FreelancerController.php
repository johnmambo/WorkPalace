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

        
            $job = Job::where('status', 'complete')
             ->where('user_id', Auth::id())
             ->get();

        return view('freelancer.jobs.compeletejobs', compact('job'));
    }


    public function pendingjobs(){
        
        $user = Auth::user();

        $job= Job::where([
                            ['id', $user->id],
                            ['status', 'pending']
                            ])->get();

        return view('freelancer.jobs.pendingjobs', compact('job'));
    }

    public function allpayments(){
        

        return view('freelancer.payments.allpayments');
    }
    public function completepayments(){
        

        return view('freelancer.payments.completepayments');

    }
    public function pendingpayments(){
        

        return view('freelancer.payments.pendingpayments');
        
    }
}
