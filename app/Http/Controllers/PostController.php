<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comment;


class PostController extends Controller
{
    public function store(Request $request)

    {
        $comment = new Comment;
        $comment->naam = $request->naam;
        $comment->post_id = $request->post_id;
        $comment->comment = $request->comment;
        $comment->save();
        return redirect()->back();
    }
}
