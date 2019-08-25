<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    //

    public function index(){
        $blogs=Blog::all();

        return view('blog.index', compact('blogs'));
    }

    public function store(){

        request()->validate([   'title'=>'required',
                                'description'=>'required'
        ]);

        Blog::create(request(['title','description']));

        return redirect('/blogs');
    }

    public function show(Blog $blog){


        return view('blog.show',compact('blog'));
    }
}
