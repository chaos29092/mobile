@extends('frontend.master')
@section('title','High Temperature Laboratory Furnaces')
@section('description','We supply muffle furnace, tube furnace, CVD & PECVD Systems, Vacuum Furnace & Atmosphere Furnace ,dental furnace, and Can be customized according to your needs.
')

@section('content')
    <div class="homepage-slider full-bottom">
        <div class="homepage-slider-transition" data-snap-ignore="true">
            <div class="homepage-slider-item">
                <h5 class="left-text">Welcome, stranger</h5>
                <p class="left-text">Swipe the image to begin.</p>
                <img src="{{asset('frontend/images/pictures/4.jpg')}}" alt="img">
                <div class="overlay bg-black"></div>
            </div>
            <div class="homepage-slider-item">
                <h5 class="center-text">This slider has CSS3 transitions</h5>
                <p class="center-text">And they are just awesome!</p>
                <img src="{{asset('frontend/images/pictures/5.jpg')}}" alt="img">
                <div class="overlay bg-black"></div>
            </div>
            <div class="homepage-slider-item">
                <h5 class="right-text">Just add a simple class</h5>
                <p class="right-text">And you got yourself transitions!</p>
                <img src="{{asset('frontend/images/pictures/6.jpg')}}" alt="img">
                <div class="overlay bg-black"></div>
            </div>
        </div>
        <a href="#" class="next-home-slider"><i class="fa fa-angle-right"></i></a>
        <a href="#" class="prev-home-slider"><i class="fa fa-angle-left"></i></a>
    </div>

    <div class="material-container">
        <div class="heading-style-5">
            <h4 class="heading-title">Welcome to Kejia</h4>
            <i class="fa fa-list heading-icon"></i>
            <div class="line bg-black"></div>
            <p class="heading-subtitle no-bottom">
                High Temperature Muffle, Tube, Vacuum Furnaces, CVD and PECVD system, Dental furnaces
            </p>
        </div>
    </div>

    <div class="decoration"></div>

    <div class="portfolio-wide container-fullscreen">
        {{--重复这一项--}}
        @foreach($categories as $category)
        <div class="portfolio-item">
            <a href="/category/{{$category->id}}" class="wide-title show-wide-text">
                <h3>{{$category->name}}</h3>
                <em></em>
                <div class="overlay bg-red-dark"></div>
                <img src="{{$category->big_pic}}" alt="{{$category->name}}">
            </a>
            <div class="wide-text">
                <p>
                    <img src="{{$category->small_pic}}" alt="{{$category->name}}">
                    {{$category->category_des}}
                </p>
                <a href="#" class="portfolio-close"><i class="fa fa-times"></i>Close</a>
                <a href="/category/{{$category->id}}" class="portfolio-link"><i class="fa fa-link"></i>Category Detail</a>
                <div class="clear"></div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="clear"></div>
@endsection