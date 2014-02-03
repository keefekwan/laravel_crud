<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Blog-like!!!</title>
		
		@include('posts.partials.assets')
	</head>
	<body>
		<div class="container">
			@include('posts.partials.header')
		
			<h1>Blog Posts</h1>

			<!-- will be used to show any messages -->
			@if (Session::has('message'))
				<div class="alert alert-info">{{ Session::get('message') }}</div>
			@endif

			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<td>ID</td>
						<td>Author</td>
						<td>Title</td>
						<td>Posts</td>
						<td>Actions</td>
					</tr>
				</thead>
				<tbody>
					@yield('content')
				</tbody>
			</table>
		</div>
	</body>
</html>


		

	
