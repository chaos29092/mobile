@extends('frontend.master')

@section('content')
    <div class="material-container">
        <div class="heading-style-5">
            <h4 class="heading-title">Blog</h4>
            <i class="fa fa-pencil heading-icon"></i>
            <div class="line bg-black"></div>
            <p class="heading-subtitle no-bottom">
                A blog template means this page is just a dummy, but in case you decide
                to add posts manually or connect it to a CMS, we got you covered!
            </p>
        </div>
    </div>
    <div class="decoration"></div>

    <div class="page-blog">
        <!-- POST 1-->
        <div class="page-blog-list material-container">
            <img src="{{asset('frontend/images/pictures/3w.jpg')}}" alt="img" class="responsive-image">
            <a href="/new"><h4 class="page-blog-title">Mobile Blog</h4></a>
            <strong class="page-blog-tags">In: <a href="#">Web Design, Mobile Templates, Blog</a></strong>
            <div class="page-blog-content">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec lectus vitae
                    metus vehicula cursus. Donec purus ex, ultricies vel iaculis sed, consectetur
                    venenatis sapien. Quisque auctor justo libero, vel aliquam odio consequat quis.
                    Nunc accumsan efficitur felis eu egestas.
                </p>
            </div>
            <div class="page-blog-list-by">
                <img src="https://secure.gravatar.com/avatar/b33f1b2ae5ec688eef5a8d4e45353c3b" alt="img">
                <strong>By: <a href="#">Enabled</a></strong>
                <em>July 15th 2024</em>
            </div>
            <a href="/new" class="page-blog-list-more"><i class="fa fa-arrow-right"></i></a>
            <a href="#" class="page-blog-list-share show-share-bottom"><i class="fa fa-retweet"></i></a>
            <div class="clear"></div>
        </div>
        <div class="decoration"></div>

    </div>


@endsection