<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;



class PostMakerController extends Controller
{
    public function storePost(Request $request)

    {
        // $request->validate([
        //     'image' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        // ]);

        $imageName = time() . '.' . $request->image->extension();

        $post = new Post;
        $post->title = $request->title;
        $post->auther = $request->auther;
        $post->paragraph1 = $request->paragraph1;
        $post->subtitle = $request->subtitle;
        $post->paragraph2 = $request->paragraph2;
        $post->tag1 = $request->tag1;
        $post->tag2 = $request->tag2;
        $post->imagename = $imageName;
        $request->image->move(public_path('images'), $imageName);
        $post->imagepath = $imageName;
        $post->save();
        return redirect('/');
    }
}
