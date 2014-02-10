@extends('layouts.show')


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



@section('comment')




<div class="row">
	<div class="col-sm-10">
		
{{ Form::open(array('route' => array('posts.index', $post_id))) }}
<h3>Say what you need to say</h3>
 <input type="text" class="form-control control-group" placeholder="Name" style="margin-bottom:10px;">
 <textarea type="text" class="form-control" rows="6" placeholder="Comment" style="margin-bottom:10px;"></textarea>
<button type="submit" class="btn btn-primary">Submit</button>
{{ Form::close() }}
	</div>
</div>



@stop


