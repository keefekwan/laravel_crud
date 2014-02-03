@extends('layouts.master')

@section('content')

	@foreach($posts as $post)
		<tr>
			<td>{{ $post->id }}</td>
			<td>{{ $post->author }}</td>
			<td>{{ $post->title }}</td>
			<td>{{ $post->body }}</td>

			<!-- we will also add show, edit, and delete buttons -->
			<td>
				{{ Form::open(array('url' => 'post/destroy/' . $post->id, 'class' => 'form-inline')) }}
					<!-- Show the post (uses show named route method found at GET post -->
					<a class="btn btn-small btn-success" href="{{ URL::route('post', array($post->id)) }}">View Post</a>

					<!-- Edit this post (uses the URI linked edit method found at GET post/edit/{id}/edit -->
					<a class="btn btn-small btn-info" href="{{ URL::to('post/edit/' . $post->id) }}">Edit Post</a>

					<!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete Post', array('class' => 'btn btn-small btn-warning')) }}
				{{ Form::close() }}
			</td>
		</tr>
	@endforeach

@stop