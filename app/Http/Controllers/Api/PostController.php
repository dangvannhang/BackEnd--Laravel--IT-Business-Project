<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;
use App\Style;
class PostController extends Controller
{


    public function index() {
        $post= Post::latest()->get();
        return response()->json($post);
    }



// post a new story
    public function store(Request $request)
    {
        $post = Post::create([
            'id_photographer' => $request->id_photographer,
            'title' => $request->title,
            'content' => $request->content,
            'image'=>$request->image,
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        return response()->json($post);
    }

// update the post
    public function update(Request $request, Post $post)
    {
        $update_post = $post->update(
            $request->only(['title', 'content', 'image','style_id'])
        );

        return response()->json([
            'update_post' => $update_post
        ]);
    }

// uploads the image for a product we created and returns the url for the product.
    public function uploadFile(Request $request)
    {
        if($request->hasFile('image')){
            $images = time()."_".$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images'), $images);
        }
        return response()->json(asset("images/$images"),201);
    }

// deletes an post.
    public function destroy($id)
    {
        $post=Post::find($id);
        $post->delete();

        return response()->json(['Status'=>'Delete finish']);
    }

    public function search_post(Request $request) {

        $search_content = $request -> input('search');
        
        $post = Post::where('title','LIKE','%'.$search_content.'%')->get();

        return response()->json(['result' => $post]);
    }       
}
