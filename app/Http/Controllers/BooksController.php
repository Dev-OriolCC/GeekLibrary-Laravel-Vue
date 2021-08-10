<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * @return array with all books from db.
     */
    public function index() {
        $books = Book::all()->toArray();
        return response()->json($books);
    }
    /**
     * @return response creates a new book in bd.
     */
    public function store(Request $request) {
        try {
            $book = new Book([
                'title' => $request->title,
                'author' => $request->author,
                'description' => $request->description,
                'published_at' => $request->published_at,
                'category_id' => $request->category_id
            ]);
            $book->save();
            return response()->json('Book created');
        } catch (\Throwable $th) {
            return response()->json('Error');
        }       
    }
    /**
     * @param int $id
     * @return book in json
     */
    public function show($id) {
        try {
            $book = Book::find($id);
            $categories = Category::all();
            return response()->json([
                'status' => true,
                'message' => 'Fetch worked correctly',
                'book' => $book,
                'categories' => $categories,
                'totalCategories' => $categories->count()
            ]);
        } catch (\Throwable $error) {
            return response()->json([
                'status' => false,
                'message' => 'Error ocurred',
                'devErrorMessage' => $error
            ]);
        }
    }
    /**
     * @param int $id
     * @return response
     */
    public function update($id, Request $request) {
        try {
            $book = Book::find($id);
            $book->update($request->all());
            return response()->json([
                'status' => true,
                'message' => "$book->title Book updated succesfully"
            ]);
        
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Error'
            ]);
        }
    }
    /**
     * @param int $id
     * @return response
     */
    public function destroy($id) {
        try {
            $book = Book::find($id);
            $book->delete();
            return response()->json([
                'status' => true,
                'message' => 'Book deleted succesfully!'
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Error deleting book.'
            ]);
        }
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
