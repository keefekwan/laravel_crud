<!DOCTYPE html>
<html>
<head>
	<title>Blog-Like!!!</title>
	@include('posts.partials.assets')
</head>
<body>
	<div class="container">
		@include('posts.partials.header')

<h1>Create a post</h1>
	
	{{ HTML::ul($errors->all()) }}

	{{ Form::open(array('url' => 'posts/create')) }}
		<div class="form-group">
			{{ Form::label('author', 'Author') }}
			{{ Form::text('author', Input::old('author'), array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::label('title', 'Title') }}
			{{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::label('body', 'Post Body') }}
			{{ Form::textarea('body', Input::old('body'), array('class' => 'form-control')) }}
		</div>

		{{ Form::submit('Create', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
	</div>
</body>
</html>