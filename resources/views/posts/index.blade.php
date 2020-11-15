@extends('layouts.app')

@section('content')
<div class="container">
	@foreach($posts as $post)
		<div class="row">
			<div class="col-6 offset-3">				
				<a href="/profile/{{ $post->user->id }}">
					<img src="/storage/{{ $post->image }}" class="w-100">
				</a>
			</div>
		</div>
		<div class="row pt-6 pb-3">
			<div class="col-8 offset-2">
				<p>
					<span class="font-weight-bold">
						<a href="/profile/{{ $post->user->id }}">
							<span class="text-dark">{{ $post->user->username }}</span>
						</a>
					</span>
					{{ $post->caption }}
				</p>
			</div>
		</div>
	@endforeach
</div>
@endsection