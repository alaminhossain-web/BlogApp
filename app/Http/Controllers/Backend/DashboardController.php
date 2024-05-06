<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Blog;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('backend.dashboard.dashboard',[
            'blogs' => Blog::where('author',auth()->user()->name)->orderBy('id','desc')->get()
        ]);
    }
}
