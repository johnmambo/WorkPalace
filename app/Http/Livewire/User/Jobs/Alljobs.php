<?php

namespace App\Http\Livewire\User\Jobs;

use Livewire\Component;
use App\Models\Job;
class Alljobs extends Component
{
   
    public function render()
    {
       
            $jobs = Job::all();
     
        return view('livewire.user.jobs.alljobs', compact('jobs'));
    }
}
