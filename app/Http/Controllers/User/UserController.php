<?php

namespace App\Http\Controllers\User;
use Illuminate\Support\Facades\Auth;
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
       
        $user = Auth::user();
        $userId = $user->id;
        $jobs = Job::where('user_id', $userId)->get();           
     
        return view('user.jobs.alljobs', compact('jobs'));
    }

    public function singleJob($id){
    
        $job = Job::findOrFail($id);
        $jobcategories = JobCategory::all();

        return view('user.jobs.single-job', compact(['job', 'jobcategories']));

    }
    public function UpdateSingleJob( Request $request, $id){
        $request->validate([
            'headline' => 'required',
            'title' => 'required',
            'description' => 'required',
            'skills' => 'required',
            'hourly_pay' => 'required',
            'project_pay' => 'required',
            
        ]);
        $job = Job::findOrFail($id);
        $job->headline = $request->headline;
        $job->title = $request->title;
        $job->user_id = auth()->user()->id;
        $job->category_id = $request->category_name;
        $job->description = $request->description;
        $job->skills = $request->skills;
        $job->hourly_pay = $request->hourly_pay;
        $job->project_pay = $request->project_pay;
        $job->status = 'draft';
        $job->save();
        return redirect()->route('user.alljobs')->with('success', 'Job Details updated successfully');
        
        
    }
    public function DeleteSingleJob($id){
        $job = Job::findOrFail($id);
        $job->delete();
        return redirect()->route('user.alljobs')->with('success', 'Job Deleted successfully');
    }
}
