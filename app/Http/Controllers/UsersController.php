<?php

namespace App\Http\Controllers;

use App\Http\Requests\Users\UpdateProfileRequest;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function index(){

        return view('users.index')->with('users',User::all());
    }

    public function makeAdmin(User $user){

//        dd($user->role);
        $user->role='admin';
        $user->save();

        session()->flash('success','User make admin successfully');

        return redirect(route('users.index'));

//        return view('users.index')->with('users',User::all());
    }

    public function edit(){

        return view('users.edit')->with('user',auth()->user());

    }

    public function update(UpdateProfileRequest $request){

//        dd($request->about);

        $user= auth()->user();

        $user->update([
            'name'=> $request->name,
            'about'=>$request->about
        ]);

        session()->flash('success', 'Profile Updated Successfully');

        return redirect()->back();
    }

}
