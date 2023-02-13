<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JobCategory;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:superadmin']);
    }
    public function checkauth()
    {
        $user = auth()->user();
        return $user;
    }
    public function superadmindash(){
        return view('superadmin.dashboard');
    }
    public function createcategory(){
        return view('superadmin.jobs.createcategory');
    }

    public function createJobcategory(Request $request){
        $request->validate([
            'category_name' => ['required', 'string', 'max:255'],
            
        ]);
        $new = new JobCategory;
        $new->category_name = $request->category_name;       
        $new->save();
        return redirect()->route('superadmin.create.category')->with('success','Category Created Successfully');
    
    }
}
