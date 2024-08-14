<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function createPost(Request $request) {
        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);
        
        $incomingFields['user_id'] = Auth::id();

        Post::create($incomingFields);

        return redirect('/');
    }

    public function editPost(Post $post) {
        return view('edit-post', ['post' => $post]);
    }

    public function reallyEditPost(Request $request, Post $post) {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);
    
        $validatedData['title'] = strip_tags($validatedData['title']);
        $validatedData['body'] = strip_tags($validatedData['body']);
    
        if (Auth::id() !== $post->user_id) {
            return redirect('/')->withErrors(['Unauthorized' => 'You are not allowed to edit this post.']);
        }
    
        $post->update($validatedData);
    
        return redirect('/')->with('success', 'Post updated successfully.');
    }
}
