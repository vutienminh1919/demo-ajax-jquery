<?php

namespace App\Http\Controllers;


use App\Models\Tag;
use App\Models\Todo;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Pagination\Paginator;
class TodoController extends Controller
{
    public function index()
    {
//        $todos = Todo::all()->toQuery()->paginate(5);
        $todos = Todo::orderBy('id','desc')->paginate(5);
//        $todos = DB::table('todos')->orderBy('id','desc')->paginate(5);
        $tags = Tag::all();
        return view('backend.note', compact('todos','tags'));
    }

    public function store(Request $request)
    {


        $todo = new Todo();
        $todo->todo = $request->todo;
        $todo->tag_id = $request->input('tag');
        $todo->save();
//        $todo = Todo::create([
//            'todo' => $request->todo
//        ]);
        return response()->json($todo);
    }

    public function update(Todo $todo, Request $request)
    {
        $request->validate([
            'todo' => 'required',
        ]);

        $todo->todo = $request->todo;
        $todo->tag_id = $request->input('tag');
        $todo->save();
        return response()->json($todo);
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();
        return response()->json($todo);
    }
}
