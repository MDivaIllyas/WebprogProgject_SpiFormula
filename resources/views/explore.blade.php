@extends('layouts.layout')

@section('layout')
    <h3 class="mt-5">Recipes for you:</h3>
    @foreach ($explore as $ex)
    <div class="my-4 bg-light border d-flex align-items-center mb-5">
            <img src="{{ $ex["image"] }}" class="mx-4 my-2" alt="" width="200px">
            <div class="flex-column">
                <h5><a href="/Explore/{{$ex["slug"]}}">{{ $ex["name"] }}</a></h5>
                <h5>{{ $ex["desc"] }}</h5>
            </div>

    </div>
    @endforeach

@endsection