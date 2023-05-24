<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookDetail extends Model
{
    use HasFactory;

    public function book(){
        return $this->belongsTo(Book::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
    

}
