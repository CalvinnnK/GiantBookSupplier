<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Publisher;



class BookController extends Controller
{
    public function show():View{
        $b = Book::paginate(5);

        return view('homepage',[
            'books' => $b
        ]);
    }

    public function bookDetails($bookid){
        
        $book = Book::find($bookid);
        $publisher = Publisher::find($book->publisher_id);
    
        return view('book',[
            'book' => $book,
            'publisher' => $publisher
       ]);
    }

}
