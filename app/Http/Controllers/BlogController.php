<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post ;
class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'writer' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'main_image' => 'required|image',
            'quote' => 'required|string',
            'content' => 'required|string',
            'sub_images' => 'nullable|array',
            'sub_images.*' => 'image'
        ]);

        $data['main_image'] = $request->file('main_image')->store('public/images');
        $data['sub_images'] = array_map(function ($file) {
            return $file->store('public/images');
        }, $request->file('sub_images', []));

        Post::create($data);
        session()->flash('success', 'Post created successfully!');
        return redirect()->route('posts.index');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
    public function show($id)
    {
        $post = Post::findOrFail($id); // Fetch the post by ID or throw a 404 error if not found
        $recentPosts = Post::orderBy('created_at', 'desc')->take(6)->get(); // Fetch the latest 6 posts

        return view('singlepost', compact('post' , 'recentPosts')); // Return the view with the post data
    }
    //
}
