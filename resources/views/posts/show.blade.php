@extends ('layouts.layout')

<!-- @section ('content') -->

	<div class="col-sm-8 blog-main">

		<h1>{{ $post->title }}</h1>

		{{ $post->body }}

		<hr>

		<div class="comments">

			<ul class="list-group">

			@foreach ($post->comments as $comment)

					<li class="list-group-item">

					<strong>

						{{ $comment->created_at->diffForHumans() }} by&nbsp;

					</strong>

					<strong>

					{{ $post->user->name }}: &nbsp;

					</strong>

						{{ $comment->body }}

					</li>

			@endforeach

			</ul>

		</div>

		<hr>

		@if (Auth::check())

			<div class="card">

				<div class="card-block">

					<form method="POST" action="/posts/{{ $post->id }}/comments">

					{{ csrf_field() }}

					<div class="form-group">

						<textarea name="body" placeholder="Plaats uw antwoord hier." class="form-control" required></textarea>

					</div>

					<div class="form-group">

						  <div class="form-group">
	    					<button type="submit" class="btn btn-primary">Plaats Comment</button>
	 					  </div>					

					</div>



					</form>

					@include ('layouts.errors')

				</div>
				
			</div>

		@endif

<!-- @endsection -->