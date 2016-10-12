@extends('frontend.master')
@section('title',$category->name)
@section('description',$category->description)

@section('content')
    <div class="container material-container">
        <h4>{{$category->name}}</h4>
        <p class="no-bottom">
            {{$category->category_des}}
        </p>
    </div>

    @foreach($products as $product)
        <div class="container material-container">
            <img src="{{$product->category_pic}}" alt="{{$product->name}}" class="responsive-image full-bottom">
            <a href="/product/{{$product->id}}"><h4 class="center-text">{{$product->name}}</h4></a>
            <p class="center-text no-bottom">
                {{$product->category_des}}
            </p>
        </div>
    @endforeach

@endsection