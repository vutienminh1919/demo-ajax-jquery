<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(5);
        $users = User::all();
        return view('backend.post', ['posts' => $posts],compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);
//        dd($request);

        $post = Post::updateOrCreate(['id' => $request->id], [
            'title' => $request->title,
            'description' => $request->description
        ]);

        return response()->json(['code' => 200, 'message' => 'Post Created successfully', 'data' => $post], 200);

    }

    public function show($id)
    {
        $post = Post::find($id);
        return response()->json($post);
    }


    public function destroy($id)
    {
        $post = Post::find($id)->delete();

        return response()->json(['success' => 'Post Deleted successfully']);
    }
}
