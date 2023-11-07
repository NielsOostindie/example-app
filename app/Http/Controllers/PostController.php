<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comment;


class PostController extends Controller
{
    public function store(Request $request)

    {
        $post = new Comment;
        $post->naam = $request->naam;
        $post->comment = $request->comment;
        $post->save();
        return redirect()->back();
    }
}
