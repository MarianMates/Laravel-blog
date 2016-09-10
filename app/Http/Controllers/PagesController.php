<?php

namespace App\Http\Controllers;

use App\Post;

class PagesController extends Controller {
    public function getIndex(){
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
        return view('welcome')->withPosts($posts);
    }
    
    public function getAbout(){
        return view('about');
    }
    
    public function getContact(){
        return view('contact');
    }
};

