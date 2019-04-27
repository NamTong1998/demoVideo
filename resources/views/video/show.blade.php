<!DOCTYPE html>
<html>
<head>
	<title> Show {{ $video->id }} </title>
</head>
<body>
	<h2> <a href="{{ route('list') }}"> Go Back </a> </h2>
	<h1> {{ $video->title }} </h1>
	<video src="{{ asset('/storage/'.$video->path) }}" autobuffer autoplay="true" autoloop loop controls poster="/images/video.png"> Format Unsupported </video>
</body>
</html>