<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    //
    public function index() {
        $books = Book::all()->toArray();
        return array_reverse($books);
    }

    public function store(Request $request) {
        $book = new Book([
            'title' => $request->title,
            'author' => $request->author,
            'description' => $request->description,
            'published_at' => $request->published_at,
            'image' => $request->image
        ]);
        $book->save();
        return response()->json('Product created');
    }

    public function show($id) {
        $book = Book::find($id);
        return response()->json($book);
    }

    public function update($id, Request $request) {
        $book = Book::find($id);
        $book->update($request->all());
        return response()->json('Product update');
    }

    public function destroy($id) {
        $book = Book::find($id);
        $book->delete();
        return response()->json('Product deleted');
    }

}
