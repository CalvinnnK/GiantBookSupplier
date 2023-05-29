@extends('layout.main')

@section('header')
    @include('layout.header')
@endsection

@section('content')
<div class="container d-flex flex-column flex-grow-1" style="height: 80vh width: 80%">
<h4 style="background-color: grey;">Book List</h4>
  <div class="container-fluid m-0 p-0 ">
    <div class="d-flex gap-2 justify-content-between" id="card_container">
        @foreach($books as $book)
          <div class="card" style="width: 18%;">
            <img src="{{$book->book_image}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$book->book_title}}</h5>
              <p class="card-text">by {{$book->book_author}}</p>
              <a href="{{route('book',[$book->id])}}" class="btn btn-primary">Details</a>
            </div>
          </div>
        @endforeach
      </div>
    </div>
    {{$books->links('pagination::bootstrap-5')}}
  </div>
@endsection

@section('footer')
    @include('layout.footer')
@endsection