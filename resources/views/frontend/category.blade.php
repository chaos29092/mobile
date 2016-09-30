@extends('frontend.master')

@section('content')
    <div class="container material-container">
        <h4>Category Name</h4>
        <p class="no-bottom">
            Experimenting with new designs is always fun, especially when new designs are built using material properties to make it sexier!
        </p>
    </div>

    <div class="container material-container">
        <img src="{{asset('frontend/images/demo_img.png')}}" alt="img" class="responsive-image full-bottom">
        <a href="/product"><h4 class="center-text">Product 1</h4></a>
        <p class="center-text no-bottom">
            Product description
        </p>
    </div>

    <div class="container material-container">
        <img src="{{asset('frontend/images/demo_img.png')}}" alt="img" class="responsive-image full-bottom">
        <a href=""><h4 class="center-text">Product 1</h4></a>
        <p class="center-text no-bottom">
            Product description
        </p>
    </div>
@endsection