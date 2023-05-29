@extends('layout.main')

@section('header')
    @include('layout.header')
@endsection

@section('content')
<div class="container" style="height: 80vh width: 80%">
    <div class="container-fluid">
      <h4 style="background-color: grey;">Publisher List</h4>
    <div class="d-flex gap-2 justify-content-center" id="card_container">
        @foreach($publisher as $p)
          <div class="card" style="width: 20%;">
            <img src="{{$p->logo}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$p->name}}</h5>
              <p class="card-text">by {{$p->address}}</p>
              <a href="{{route('pubdetail', [$p->id] )}}" class="btn btn-primary">Details</a>
            </div>
          </div>
        @endforeach
    </div>
  </div>
  {{$publisher->links('pagination::bootstrap-5')}}
</div>
@endsection

@section('footer')
    @include('layout.footer')
@endsection