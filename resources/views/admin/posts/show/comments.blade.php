<div class="card card-trans-0 mb-3">

	<div class="card-header font-weight-bold">
		{{-- <div class="card-title"> --}}
			<i class="{{ Config::get('icons.comments') }}"></i>
			Comments <small>({{ $recipe->comments()->count() }} total)</small>
		{{-- </div> --}}
	</div>

	<div class="card-body card-trans-6 text-dark p-0">
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