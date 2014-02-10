@extends('layouts.show')


@section('comment')


<div class="row">
	<div class="col-sm-10">
		
{{ Form::open(array('route' => array('comments.store', $post_id))) }}
<h3>Say what you need to say</h3>
 <input type="text" class="form-control control-group" placeholder="Name" style="margin-bottom:10px;">
 <textarea type="text" class="form-control" rows="6" placeholder="Comment" style="margin-bottom:10px;"></textarea>
{{ Form::submit()}}
<!-- <button type="submit" class="btn btn-primary">Submit</button> -->
{{ Form::close() }}

@stop
<!-- <form action="#" style="color:white;">
</form>
	</div>
</div>
