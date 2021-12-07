<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PostInterface;

class PostController extends HomeController
{

    public function index()
    {
        $posts = Post::latest()->paginate(5);
//        $posts = $this->getPostByUSer()->paginate(2);
//        $posts = Post::all();
        $users = User::all();
//        return response()->json(['code' => 200,  'data' => [$posts,$users]]);
//        return response()->json($posts);

        return view('backend.post', ['posts' => $posts],compact('users'));

    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'category' => 'required',
        ]);
//        dd($request);

        $post = Post::updateOrCreate(['id' => $request->id], [
            'title' => $request->title,
            'description' => $request->description,
            'category' => $request->input('category')
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

    public function search(Request $request)
    {
        $output = '';
        $posts = Post::where('title','LIKE','%'.$request->search.'%')->get();
        foreach ($posts as $post){
            $output .= '<tr>
                        <td>'.$post->id.'</td>
                        <td>'.$post->title.'</td>
                        <td>'.$post->description.'</td>

                        <td>'.$post->category.'</td>
                        </tr>';
        }
        return response()->json($output);
    }
    public function getPostByUSer()
    {

        if (!empty(Auth::user()->id)) {
            $userId = Auth::user()->id;
        }

        $posts = $this->getUserById($userId);


        return view('backend.post',compact('posts'));
    }
    public function getUserById($userId)
    {

        return  Post::where("user_id", $userId)->get();
    }

}
