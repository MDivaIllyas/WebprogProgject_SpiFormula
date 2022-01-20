@extends('layouts.layout')

@section('layout')
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner mt-5">
        <div class="carousel-item active">
            <img src="meat-g9719eb165_1920.jpg"  class="d-block w-100" alt="..." height = 600px>
            <div class="carousel-caption d-none d-md-block">
            <h5 class="text-warning">Steak</h5>
            </div>
        </div>
        <div class="carousel-item">
            <img src="pasta.jpg" class="d-block w-100" alt="..." height = 600px>
            <div class="carousel-caption d-none d-md-block">
            <h5 class="text-warning">Laparino Makanini</h5>
            </div>
        </div>
        <div class="carousel-item">
            <img src="pexels-jonathan-borba-2983101.jpg" class="d-block w-100" alt="..." height = 600px>
            <div class="carousel-caption d-none d-md-block">
            <h5 class="text-warning">Goji Burger</h5>
            </div>
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="topbody mt-5" >
        <h1 class="mx-auto" style="width: 200px;">Today's Favourite</h1>
        <h4 class="mx-auto mt-4" style="width: 200px;">⭐⭐⭐⭐⭐</h4>
        <div class="container top mx-auto mt-4" style="width: 450px;">
            <div class="topfood">
                <img src="beefb.jpg" width="400px">
            </div>
            <div class="topdesc mt-3 mb-5">
                <h5 class="mx-auto" style="width: 200px;">Beef bourguignon</h5>
                <p>Beef bourguignon or bœuf bourguignon, also called beef Burgundy, and bœuf à la Bourguignonne, is a beef stew braised in red wine, often red Burgundy, and beef stock, typically flavored with carrots, onions, garlic, and a bouquet garni, and garnished with pearl onions, mushrooms, and bacon.</p>
            </div>
        </div>
    </div>
@endsection