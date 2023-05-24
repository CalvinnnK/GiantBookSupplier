
@extends('layout.main')

@section('header')
    @include('layout.header')
@endsection

@section('content')
<div class="container-fluid">
    <div class="container" style="width: 50%">
        <h4 style="background-color: grey;">Publisher {{$publisher->name}}</h4>
        <h4>Address - {{$publisher->address}}</h6>
        <h4>Phone - {{$publisher->phone}}</h6>
        <h4>Email - {{$publisher->email}}</h6>
        <div class="d-flex flex-wrap justify-content-center" id="card_container">
        @foreach($books as $book)
          <div class="card" style="width: 20%;">
            <img src="{{$book->book_image}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$book->book_title}}</h5>
              <p class="card-text">by {{$book->book_author}}</p>
              <a href="/book/{{$book->id}}" class="btn btn-primary">Details</a>
            </div>
          </div>
        @endforeach
    </div>
    </div>
</div>
@endsection

@section('footer')
    @include('layout.footer')
@endsection