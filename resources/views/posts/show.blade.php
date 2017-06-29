@extends('layouts.layout')

@section('content')
<div class="row">

    <div class="col-sm-8 blog-main">

        <div class="blog-post">
            <h2 class="blog-post-title">{{$post->title}}</h2>
            <p class="blog-post-meta">January 1, 2017 by <a href="#">Igor</a></p>

            <p>
                {{$post->body}}
            </p>

        </div>

</div>
@endsection