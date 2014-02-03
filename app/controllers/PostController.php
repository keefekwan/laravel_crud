<?php

class PostController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// Get all posts
		$posts = Post::all();

		// Load the view and pass in the posts
		return View::make('posts.index')
			->with('posts', $posts);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// Load the create form 
		return View::make('posts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// Validation process
		$rules = array(
			'author' => 'required',
			'title'  => 'required',
			'body'   => 'required'
		);

		$validator = Validator::make(Input::all(), $rules);

		// Process login
		if ($validator->fails()) {
			return Redirect::to('posts/new')
				->withErrors($validator)
				->withInput();
		} else {
			// Store input
			$post = New Post;
			$post->author = Input::get('author');
			$post->title  = Input::get('title');
			$post->body   = Input::get('body');
			$post->save();
		}

		// Redirect with flash message
		Session::flash('message', 'Post successfully created');
		return Redirect::to('posts');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// Get post
		$post = Post::find($id);

		// Show the view and pass in post
		return View::make('posts.show')
			->with('post', $post);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// Get post 
		$post = Post::find($id);

		// Show edit form and pass in post
		return View::make('posts.edit')
			->with('post', $post);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// Validation process
		$rules = array(
			'author' => 'required',
			'title'  => 'required',
			'body'   => 'required'
		);

		$validator = Validator::make(Input::all(), $rules);

		// Process login
		if ($validator->fails()) {
			return Redirect::to('post/edit' . $id)
				->withErrors()
				->withInput();
		} else {
			// Store
			$post = Post::find($id);
			$post->author  = Input::get('author');
			$post->title = Input::get('title');
			$post->body  = Input::get('body');
			$post->save();
		}

		// Redirect
		Session::flash('message', 'Post updated successfully');
		return Redirect::to('posts');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// Delete
		$post = Post::find($id);
		$post->delete();

		// Redirect
		Session::flash('message', 'Post Deleted');
		return Redirect::to('posts');
	}

}