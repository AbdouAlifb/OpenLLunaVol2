<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post ;

class PagesController extends Controller
{

    public function home()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
    public function blog()
    {
        $posts = Post::all(); // Fetch all posts
        $recentPosts = Post::orderBy('created_at', 'desc')->take(6)->get(); // Fetch the latest 6 posts
        return view('blog', compact('posts', 'recentPosts'));
    }
  

    public function services()
    {
        return view('services');
    }

    public function portfolio()
    {
        return view('portfolio');
    }

    public function team()
    {
        return view('team');
    }

    public function faq()
    {
        return view('faq');
    }

    public function terms()
    {
        return view('terms');
    }

    public function privacy()
    {
        return view('privacy');
    }
    //
}
