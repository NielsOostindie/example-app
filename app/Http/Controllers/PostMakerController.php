<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostMaker;
use App\Models\Post;


class PostMakerController extends Controller
{
    public function storePost(Request $request)

    {
        $post = new Post;
        $post->title = $request->title;
        $post->auther = $request->auther;
        $post->paragraph1 = $request->paragraph1;
        $post->subtitle = $request->subtitle;
        $post->paragraph2 = $request->paragraph2;
        $post->tag1 = $request->tag1;
        $post->tag2 = $request->tag2;
        $post->image = $request->image;
        $post->save();
        return redirect()->back();
    }
}
