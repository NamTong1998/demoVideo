<!DOCTYPE html>
<html>
<head>
	<title> List </title>
</head>
<body>
	<h2> <a href="{{ route('create') }}"> Create </a> </h2>
	@foreach( $videos as $video )
	<h3> {{ $video->id }} :: {{ $video->title }} :: <a href="{{ route('show', ["id" => $video->id]) }}">Play {{ $video->title}}</a> </h3>
	@endforeach
</body>
</html>