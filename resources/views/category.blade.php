
@extends('layout.main')

@section('header')
    @include('layout.header')
@endsection

@section('content')

<div class="container-fluid d-flex flex-grow-1">
    <div class="container-fluid" style="width: 70%">
        <h4 style="background-color: grey;">Category {{$category->category}}</h4>
        <div class="d-flex gap-2" id="card_container">
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
    {{$books->links('pagination::bootstrap-5')}}
    </div>
</div>
@endsection

@section('footer')
    @include('layout.footer')
@endsection