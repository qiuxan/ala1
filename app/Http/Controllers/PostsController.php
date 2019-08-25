<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\Posts\CreatePostRequest;
use App\Http\Requests\Posts\UpdatePostRequest;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('verifyCategoriesCount')->only(['create','store']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts=Post::all();

        return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('posts.create')->with('categories',Category::all())->with('tags',Tag::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {

//        dd($request->all());
        $image = $request->image->store('posts');

//        dd($image);


        $post= Post::create([
            'title' =>$request->title,
            'description'=> $request->description,
            'image'=>$image,
            'category_id'=>$request->category,
            'user_id'=>auth()->user()->id

        ]);

        if ($request->tags){

            $post->tags()->attach($request->tags);
        }
//
        session()->flash('success', 'Post Create Successfully');
//
        return redirect(route('posts.index'));



        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.create')->with('post',$post)->with('categories',Category::all())->with('tags',Tag::all());
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request,Post $post)
    {
        $data=$request->only(['title','description','published_at']);

        $data['category_id']=$request->category;


        //
        if ($request->hasFile('image')){

            $image=$request->image->store('posts');

//            Storage::delete($post->image);
            $post->deleteImage();

            $data['image']= $image;
        }

        if ($request->tags){

            $post->tags()->sync($request->tags);
        }

        $post->update($data);

        session()->flash('success','Post updated successfully');

        return redirect(route('posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $post= Post::withTrashed()->where('id',$id)->firstOrFail();

        if ($post->trashed()){

//            Storage::delete($post->image);

            $post->deleteImage();

            $post->forceDelete();
        }
        else{
            $post->delete();
        }

        session()->flash('success', 'Post Deleted Successfully');
        //
        return redirect(route('posts.index'));
    }
    /**
     * Display a listing of the soft deleted posts.
     *
     * @return \Illuminate\Http\Response
     */


    public function trashed(){

        $trashed= Post::onlyTrashed()->get();


        return view('posts.index')->with('posts',$trashed);
    }

    public function restore($id){

//        return 'this is restore';
        $post= Post::withTrashed()->where('id',$id)->firstOrFail();
        $post->restore();

        session()->flash('success', 'Post Restore Successfully');

        return redirect()->back();

    }
}
