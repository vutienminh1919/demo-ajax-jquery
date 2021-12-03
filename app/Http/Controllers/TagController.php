<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{

    public function index(Request $request)
    {
        $tags = Tag::all();
        return view('backend.tag', compact('tags'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $tag = new Tag();
        $tag->name = $request->name;
        $tag->save();
        return response()->json($tag);

    }



    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $tag = new Tag();
        $tag->name = $request->name;
        $tag->save();
        return response()->json($tag);

    }

    public function destroy(Tag $tag)
    {
        $tag->delete();
        return response()->json($tag);

    }
}
