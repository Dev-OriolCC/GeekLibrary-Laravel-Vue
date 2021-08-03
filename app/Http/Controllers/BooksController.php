<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * @return array with all books from db.
     */
    public function index() {
        $books = Book::all()->toArray();
        return array_reverse($books);
    }
    /**
     * @return response creates a new book in bd.
     */
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
    /**
     * @param int $id
     * @return book in json
     */
    public function show($id) {
        $book = Book::find($id);
        return response()->json($book);
    }
    /**
     * @param int $id
     * @return response
     */
    public function update($id, Request $request) {
        $book = Book::find($id);
        $book->update($request->all());
        return response()->json('Product update');
    }
    /**
     * @param int $id
     * @return response
     */
    public function destroy($id) {
        $book = Book::find($id);
        $book->delete();
        return response()->json('Product deleted');
    }
    /**
     * @return int total of Books
     */
    public function totalBooks(){
        $totalBooks = Book::all()->count();
        return response()->json([
            'totalBooks' => $totalBooks
        ]);
    }

}
