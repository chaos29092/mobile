@extends('frontend.master')
@section('title',$page->title)
@section('description',$page->description)

@section('content')
    <div>
        <!-- POST 1-->
        <div class="page-blog-list material-container">
            <img src="{{$page->main_pic}}" alt="{{$page->name}}" class="responsive-image">
            <h3 class="page-blog-title">{{$page->name}}</h3>

            <div class="page-blog-content">

                {!! $page->content !!}

                <div class="blog-post-comments full-bottom">

                    <div class="blog-post-comment-add">
                        <h5>Leave your inquiry</h5>
                        <p>
                            if you have any need, please contact me
                        </p>
                        <strong>Name</strong>
                        <em>required</em>
                        <input type="text" placeholder="Your Name">
                        <strong>Email</strong>
                        <em>required</em>
                        <input type="text" placeholder="Your Email">
                        <strong>Message</strong>
                        <em>required</em>
                        <textarea cols="30" rows="3" placeholder="Your Message"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="decoration hide-if-mobile"></div>
    </div>

@endsection