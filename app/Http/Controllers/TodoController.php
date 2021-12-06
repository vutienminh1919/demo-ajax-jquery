<?php

namespace App\Http\Controllers;


use App\Models\Tag;
use App\Models\Todo;


use App\Models\User;
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
        $users = User::all();
        return view('backend.note', compact('todos','tags','users'));

    }

    public function store(Request $request)
    {
        $request->validate([
            'todo' => 'required'
        ]);

        $todo = new Todo();
        $todo->todo = $request->todo;
        $todo->tag_id = $request->input('tag');
        $todo->save();
//        toastr()->success("Create Success !");
        return response()->json([$todo,'message'=> 'Create success']);
    }

    public function update(Todo $todo, Request $request)
    {
        $request->validate([
            'todo' => 'required',
        ]);

        $todo->todo = $request->todo;
        $todo->tag_id = $request->input('tag');
        $todo->save();
//        toastr()->success("Edit Success !");
        return response()->json([$todo,'message'=> 'Edit success'],200);
    }

    public function show(Todo $todo)
    {

    }

    public function destroy(Todo $todo)
    {
        $todo->delete();
//        toastr()->success("Delete Success !");
        return response()->json($todo,200);
    }
}
