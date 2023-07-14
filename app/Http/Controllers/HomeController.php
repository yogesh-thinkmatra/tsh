<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function getBlogList(){
        $blogs=Blog::get();
       return view('blog', compact('blogs'));
    }
}
