<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\About;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VisitorController extends Controller
{
    public function index()
    {
        
        $project = Project::all();
               
        $about = About::first();
        $gallery = Gallery::all();
        
        $data_isExist = About::all()->count() > 0;
        
        // $user_isExist = $request->session()->has('users');

        // die($user_isExist);

        return view('visitor-page.landing-page', compact('project', 'about',  'data_isExist', 'gallery'));
        // $user_isExist = $request->session()->has('users');

        // die($user_isExist);

        
        
    }
}

