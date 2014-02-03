@extends('layouts.default')


@section('content')
	<h1>{{$posts->title}}</h1>
	<hr>
   {{$posts->content}}
	
@stop







