@extends('layouts.default')

@section('content')
@foreach ($posts as $post)

 <div class="text-color">
 
                <!-- blog entry -->
                <h1><a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                </h1>
                <hr>
                </p><i class="fa fa-calendar fa-2x"></i> {{ $post -> created_at}}</p>
          
      
 </div>
@endforeach

     <div class="pager">
                 {{ $posts->links() }}
                 </div>




<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47215103-2', 'frbit.net');
  ga('send', 'pageview');

</script>
    @stop


@section('sidebar')
<div class="text-color">
  <h1 style="text-align: center;">About Hannah and Tanner</h1>
  <hr>
  <div class="about-us"></div>
  <div class="about-us-text"><p>We love each other. Our hometown is Kaysville, Utah. We live in Richmond, Utah, and we have a wonderful dog named Watson and a baby on the way.</p></div>
 </div>


@stop
