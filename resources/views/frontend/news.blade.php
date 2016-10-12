@extends('frontend.master')
@section('title','News')
@section('description','News')

@section('content')
    <div class="material-container">
        <div class="heading-style-5">
            <h4 class="heading-title">News</h4>
        </div>
    </div>


    <div class="page-blog">
        @foreach($news as $new)
        <div class="page-blog-list material-container">
            <img src="{{$new->main_pic}}" alt="{{$new->name}}" class="responsive-image">
            <a href="/new/{{$new->id}}"><h4 class="page-blog-title">{{$new->name}}</h4></a>
            <div class="page-blog-content">
                <p>
                    {{str_limit($new->description,100)}}
                </p>
            </div>
            <div class="page-blog-list-by">
                <img src="https://secure.gravatar.com/avatar/b33f1b2ae5ec688eef5a8d4e45353c3b" alt="img">
                <strong>By: <a href="#">Kejia</a></strong>
                <em>{{$new->updated_at}}</em>
            </div>
            <a href="/new/{{$new->id}}" class="page-blog-list-more"><i class="fa fa-arrow-right"></i></a>
            <a href="#" class="page-blog-list-share show-share-bottom"><i class="fa fa-retweet"></i></a>
            <div class="clear"></div>
        </div>
        @endforeach
    </div>


@endsection