@extends('layouts.default')


@section('content')

<div>
	 <div class="index-text">
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
<div>
<h1 style="text-align: center;">About Hannah and Tanner</h1>
<hr>
<div class="about-us"></div>
<div class="about-us-text"><p>We love each other. Our hometown is Kaysville, Utah. We live in Richmond, Utah, and we have a wonderful dog named Watson and a baby on the way.</p></div>
</div>


@stop





