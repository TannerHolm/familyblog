<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
@foreach ($posts as $post)
    <div>
    <ul>
    	<li><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></li>
    </ul>
    

    </div>

@endforeach
	
</body>
</html>
