<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function __invoke(){
        $search  = request('search');
        $jobs =Job::with('employer','tags')->
        where('title', 'LIKE', '%'.request('search').'%') 
        ->orWhereHas('tags', function ($query) use ($search) {
            $query->where('name', 'LIKE', '%' . $search . '%');
        })
        ->paginate(10);
       
        return view('results',['jobs'=>$jobs]);
    }
}
