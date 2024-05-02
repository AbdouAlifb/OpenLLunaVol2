<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post ;
use Illuminate\Support\Facades\Log;

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
        \Log::info('Received sections:', $request->input('sections'));
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'writer' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'main_image' => 'required|image',
            'quote' => 'required|string',
            'sub_images' => 'nullable|array',
            'sub_images.*' => 'image',
            'sections' => 'required|array',
            'sections.*.title' => 'sometimes|string|max:255',
            'sections.*.content' => 'required|string',
            'sections.*.image' => 'sometimes|image'
        ]);
        
        // dd($request->all()); 
        $data['main_image'] = $request->file('main_image')->store('public/images');
        
        if ($request->hasFile('sub_images')) {
            $data['sub_images'] = array_map(function ($file) {
                return $file->store('public/images');
            }, $request->file('sub_images'));
        } else {
            $data['sub_images'] = [];
        }
        
        $post = Post::create($data);
        
        foreach ($request->sections as $index => $section) {
            $sectionData = [
                'title' => $section['title'],
                'content' => $section['content'],
                'image' => null
            ];
        
            if ($request->hasFile("sections.$index.image")) {
                $file = $request->file("sections.$index.image");
                $sectionData['image'] = $file->store('public/images');
            }
        
            $post->sections()->create($sectionData);
        }
        
        
        
        return redirect()->route('posts.index')->with('success', 'Post created successfully!');
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
