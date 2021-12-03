<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
//        $data['books'] = Book::orderBy('id', 'desc')->paginate(5);
        return view('backend.book', compact("books"));

    }


    public function store(Request $request)
    {
        $book = Book::updateOrCreate(
            [
                'id' => $request->id
            ],
            [
                'name' => $request->name,
                'author' => $request->author,
            ]);

        return response()->json(['success' => true]);
    }


    /**
     * Display the specified resource.
     *
     * @param \App\Models\Book $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Book $book
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit(Request $request)
    {
        $where = array('id' => $request->id);
        $book  = Book::where($where)->first();

        return response()->json($book);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Book $book
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Request $request)
    {

            $book = Book::where((array)'id',$request->id)->delete();

            return response()->json(['success' => true]);

    }
}
