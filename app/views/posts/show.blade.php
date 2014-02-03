<!DOCTYPE html>
<html>
<head>
	<title>Blog-Like!!!</title>
	@include('posts.partials.assets')
</head>
	<body>
		<div class="container">
			@include('posts.partials.header')

			<h1>Blog Post by: {{ $post->author }}</h1>

				<div class="jumbotron text-center">
					<h2>{{ $post->title }}</h2><br>
					<p>Body: {{ $post->body }}</p> 
				</div>
		</div>
	</body>
</html>
