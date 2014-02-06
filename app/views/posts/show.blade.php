@extends('layouts.default')


@section('content')

<div>
	 <div class="text-color">
	@foreach ($posts as $post)
	<h1>{{$post->title}}</h1>
	<hr>
	{{$post->content}}
 </div>
	@endforeach
</div>

     <div class="pager">
                 {{ $posts->links() }}
                 </div>
   

@stop


@section('sidebar')
<div class="text-color">
<h2 style="text-align: center;">About Hannah and Tanner</h2>
<div class="about-us"></div>
<div class="about-us-text"><p>We love each other. Our hometown is Kaysville, Utah. We live in Richmond, Utah, and we have a wonderful dog named Watson and a baby on the way.</p></div>
</div>


@stop





