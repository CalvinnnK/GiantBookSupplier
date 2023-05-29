<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PublisherController extends Controller
{
    public function showall(){
        $publisher = Publisher::paginate(5);
        return view('publisher',[
            'publisher' => $publisher
        ]);
    }

    public function showbooks($id){
        $publisher = Publisher::find($id);
        $books = $publisher->book;

        return view('publisher_detail',[
            'publisher' => $publisher,
            'books' => $books
        ]);
    }
}
