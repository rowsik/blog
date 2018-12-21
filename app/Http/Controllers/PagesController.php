<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function getIndex()
    {
        $posts=Post::orderBy('created_at','desc')->limit(4)->get();
    	return view("pages.welcome",compact('posts'));
    }

    public function getAbout()
    {
    	$fu="kiss";
    	return view('pages/about',compact('fu'));
    }

    public function getContact()
    {
    	return view('pages/contact');
    }
}
