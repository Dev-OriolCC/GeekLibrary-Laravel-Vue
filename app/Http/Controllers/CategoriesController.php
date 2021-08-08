<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;


class CategoriesController extends Controller
{
    /**
     * @return response categories/total categories
     */
    public function getCategories() {
        try {
            $categories = Category::all();
            $totalCategories = Category::all()->count();
            return response()->json([
                'status' => true,
                'message' => 'Succesfull',
                'categories' => $categories,
                'totalCategories' => $totalCategories
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Error',
            ]);
        }
    }

    /**
     * @return response creates a new book in bd.
     */
    public function store(Request $request) {
        try {
            $category = new Category([
                'name' => $request->name,
            ]);
            $category->save();
            return response()->json([
                'status' => true,
                'message' => 'category created'
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
     * @return book in json
     */
    public function show($id) {
        try {
            $category = Category::find($id);
            return response()->json([
                'status' => true,
                'category' => $category
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'category' => 'Category deleted'
            ]);
        }
    }
    /**
     * @param int $id
     * @return response
     */
    public function update($id, Request $request) {
        try {
            $category = Category::find($id);
            $category->update($request->all());
            return response()->json([
                'status' => true,
                'message' => 'Category update'
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Category not updated'
            ]);
        }
    }

    /**
     * @param int id of cate.
     * @return response destroy category
     */
    public function destroyCat($id){
        try {
            $category = Category::find($id);
            $total = $category->books->count();
            if ($total > 0) {
                return response()->json([
                    'status' => false,
                    'message' => "Can not delete because there are {$total} books associated",
                ]);
            }else {
                $category->delete();
                return response()->json([
                    'status' => true,
                    'message' => 'Category deleted successfully!'
                ]);
            }
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => "ERROR",
            ]);
        }
    }

}
