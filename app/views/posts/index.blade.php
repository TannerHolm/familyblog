@extends('layouts.default')

@section('content')
 
@foreach ($posts as $post)


                <!-- blog entry -->
                <h1><a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                </h1>
                </p><i class="fa fa-calendar fa-2x"></i> {{ $post -> created_at}}</p>
                <hr>
@endforeach
    @stop
