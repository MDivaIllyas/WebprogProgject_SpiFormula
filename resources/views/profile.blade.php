@extends('layouts.layout')

@section('layout')
    <div class="navbar navbar-expand-lg navbar-dark bg-danger mt-5">
        <h1 class="container ms-3">About US</h1>
    </div>
    <div class="position-relative">
        <h1 class="mt-5 mx-auto" style="width: 500px;">
            {{ $about }}
        </h1>
        <h3 class="mt-5 mx-auto" style="width: 500px;">
            {{ $about2 }}
        </h3>
        <div class="mt-5 mx-auto" style="width: 800px;">
            {{ $about3 }}
        </div>
      </div>
    
@endsection