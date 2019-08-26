<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class siteInfomationController extends Controller
{
    //
    public function about(){

//        return 'this is about';
        return view('blog.about');

    }

    public function contact(){

//        return 'this is about';
        return view('blog.contact');

    }

}
