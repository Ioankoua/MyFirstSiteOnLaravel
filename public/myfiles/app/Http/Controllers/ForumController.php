<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ForumRequest;
use App\Models\Forum;

class ForumController extends Controller
{
	public function forum_page()
    {
    	$answer = new Forum;
    	return view('main_pages.forum_page.forum', ['user_text' => $answer::all()]);
    }

     public function forum_submit(Request $req)
     {	
    	$forum = new Forum();

        $forum->name = $req->input('name');
	    $forum->email = $req->input('email');
    	$forum->subject = $req->input('subject');
    	$forum->message = $req->input('message');

    	$forum->save();

    	return redirect()->route('forum');
    }
  
}
