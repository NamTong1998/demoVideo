<!DOCTYPE html>
<html>
<head>
	<title> Create </title>
</head>
<body>
	<h2> <a href="{{ route('list') }}"> Go Back </a> </h2>
	<form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
		@csrf
		<input type="text" placeholder="Title" name="title" value="{{ old('name') }}">
		<input type="file" accept="video/*" name="video" value="{{ old('video') }}">
		<input type="submit" value="Upload">
	</form>
</body> 
</html>