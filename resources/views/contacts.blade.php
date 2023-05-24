
@extends('layout.main')

@section('header')
    @include('layout.header')
@endsection

@section('content')
<div class="container" style='height:75vh'>
    <div class="container" style="width: 50%">
        <h4 style="background-color: grey;">Contacts</h4>
        <h4>Store Address : </h4>
        <p>Jalan Pembangunan Baru Raya</p>
        <p>Kompleks pertokoan Emerald Blok III/12</p>
        <p>Bintaro, Tangerang Selatan</p>
        <p>Indonesia</p>
        <h4>Open Daily : </h4>
        <p>08.00 - 20.00</p>
        <h4>Contact :</h4>
        <p>Phone : 021-08899776655</p>
        <p>Email : happybookstore@happy.com</p>
    </div>
    </div>
</div>
@endsection

@section('footer')
    @include('layout.footer')
@endsection
