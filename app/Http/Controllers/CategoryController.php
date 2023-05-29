<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Book;

class CategoryController extends Controller
{
    public function get_category(){
        $list = Category::all();
        return $list;
    }

    public function show($id){
        $cat = Category::find($id);
        $bookid = $cat->bookdetail->pluck('book_id')->unique();
        $books = Book::whereIn('id', $bookid)->paginate(5);
        
        return view('category',[
            'category' => $cat,
            'books' => $books
        ]);
    }

}
