
@extends('layout.main')

@section('header')
    @include('layout.header')
@endsection

@section('content')
<div class="container-fluid">
    <div class="container" style="width: 50%">
    <h4 style="background-color: grey;">Book Detail</h4>
        <div class="d-flex justify-content-center">
            <div class="card" style="   width: 100% ;">
            <img src="{{$book->book_image}}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Title {{$book->book_title}}</p>
                <p class="card-text">Author : {{$book->book_author}}</p>
                <p class="card-text">publisher : {{$publisher->name}}</p>
                <p class="card-text">Year : {{$book->year}}</p>
                <p class="card-text">Synopsis :</p>
                <p class="card-text">{{$book->synopsis}}</p>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
    @include('layout.footer')
@endsection