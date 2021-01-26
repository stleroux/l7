<div class="card card-secondary mb-3">

	<div class="card-header font-weight-bold p-1">
		{{-- <div class="card-title"> --}}
			<i class="{{ config('icons.comments') }}"></i>
			Comments <small>({{ $recipe->comments()->count() }} total)</small>
		{{-- </div> --}}
	</div>

	<div class="card-body text-dark p-1">
		@if($recipe->comments->count())
			<table class="table table-sm table-hover mb-0">
				<thead>
					<tr>
						<th scope="col">Name</th>
						<th scope="col">Comment</th>
						<th scope="col">Posted On</th>
					</tr>
				</thead>
				<tbody>
					@foreach($recipe->comments as $comment)
					<tr scope="row">
						<td>
							@include('common.authorFormat', ['model'=>$comment, 'field'=>'user'])
							{{-- {{ $comment->user->email }} --}}
						</td>
						<td>{!! $comment->comment !!}</td>
						<td>
							@include('common.dateFormat', ['model'=>$comment, 'field'=>'created_at'])
						</td>
						
					</tr>
					@endforeach
				</tbody>
			</table>
		@else
			<div class="text p-1">No comments found</div>
		@endif
	</div>

</div>