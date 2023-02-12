<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
}