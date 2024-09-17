<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Blog::all();
        return response()->json($posts);
    }

    public function show($id)
    {
        $post = Blog::find($id);
        if ($post) {
            return response()->json($post);
        } else {
            return response()->json(['message' => 'Post not found'], 404);
        }
    }
}

