<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //to make all routes here available to the auth user only we can use a constructor 
    public function __construct(){
        $this->middleware('auth');
    }

    public function create(){
        return view('posts/create');
    }

    public function store(){
        // first we need to validate the data 
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required', 'image'],
        ]);
        
        //now this image is stored in some variable in some file we can tell laravel where to sotre it using
        $imagePath = request('image')->store('uploads', 'public');
        // storing data 
        //we can store data the same way we did in tinker but there is an easier way 
        //but this would fail as we are not passing any user_id with the post 
        //\App\Post::create($data);
        
        //so the solution to it is to save using the relation
        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath
        ]);
        
        //redirecting the user to their profile with auth
        return redirect('/profile/' . auth()->user()->id);
    }
}
