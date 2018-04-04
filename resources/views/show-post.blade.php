@extends('Centaur::layout')

@section('title')
	{{ $post->title }}
@endsection

@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
<<<<<<< HEAD
				<h1>{{ $post->title }}</h1>
				<time>{{ \Carbon\Carbon::createFromTimestamp(strtotime($post->created_at))->diffForHumans()}}</time>
=======
			<h1>{{ $post->title }}</h1>
			<time>{{ \Carbon\Carbon::createFromTimestamp(strtotime($post->created_at))->diffForHumans() }}</time>
>>>>>>> 05c82859e20c4184de9d50b4ad0cb93423e4a928
			<div>
				{{ $post->content }}
			</div>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
<<<<<<< HEAD
		<h2>Comments</h2>
		@if($post->comments->count() > 0)
			@foreach($post->comments as $comment)
				<div class="container-fluid">
					<h3>{{ $comment->user->email }}</h3>
					<p>{{ $comment->content }}</p>
			</div>
			@endforeach
		@else
			<div class="container-fluid">
				Trenutno nema komentra!!
			</div>

		@endif
=======
			<h2>Comments</h2>
			@if($post->comments->count() > 0)
				@foreach($post->comments as $comment)
					<div class="container-fluid">
						<h3>{{ $comment->user->email }}</h3>
						<p>{{ $comment->content }}</p>
					</div>
				@endforeach
			@else
				<div class="container-fluid">
					Trenutno nema komentara!!
				</div>
			@endif
>>>>>>> 05c82859e20c4184de9d50b4ad0cb93423e4a928
		</div>
	</div>
	<hr>
	@if(Sentinel::check())
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<form method="post" action="{{ route('comments.store') }}">
					<div class="form-group">
						<label>Comment</label>
						<textarea class="form-control" rows="5" name="comment"></textarea>
						{!! ($errors->has('comment') ? $errors->first('comment', '<p class="text-danger">:message</p>') : '') !!}
					</div>
					{{ csrf_field() }}
<<<<<<< HEAD
					<input type="hidden" name="post_id" value="{{ $post->id}}">
=======
					<input type="hidden" name="post_id" value="{{ $post->id }}">
>>>>>>> 05c82859e20c4184de9d50b4ad0cb93423e4a928
					<div class="form-group">
						<button type="submit" class="btn btn-default">Comment</button>
					</div>
				</form>
			</div>
		</div>
	@endif
@stop
