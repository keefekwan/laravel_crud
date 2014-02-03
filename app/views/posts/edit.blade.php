<!DOCTYPE html>
<html>
<head>
	<title>Blog-Like!!!</title>
	@include('posts.partials.assets')
</head>
<body>
	<div class="container">
		@include('posts.partials.header')

<h1>Edit post</h1>

	{{ HTML::ul($errors->all()) }}

	{{ Form::model($post, array('route' => array('update', $post->id), 'method' => 'put')) }}
		
		<div class="form-group">
				{{ Form::label('author', 'Author') }}
				{{ Form::text('author', null, array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
				{{ Form::label('title', 'Title') }}
				{{ Form::text('title', null, array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
				{{ Form::label('body', 'Post Body') }}
				{{ Form::text('body', null, array('class' => 'form-control')) }}
		</div>

		{{ Form::submit('Edit Post', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}