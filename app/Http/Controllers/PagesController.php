<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;

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
    
    public function postContact(Request $request) {
        $this->validate($request, [
            'email'=>'required|email',
            'subject'=>'min:3',
            'message'=>'min:10']);
        
        $data = array(
            'email' => $request->email,  
            'subject' => $request->subject,
            'bodyMessage' => $request->message
        );
        
        Mail::send('emails.contact', $data, function($message)use ($data){
            $message->from($data['email']);
            $message->to('mates.marian_n@yahoo.com');
            $message->subject($data['subject']);
        });
    }
};

