<div class="card card-trans-4 mb-3">

	<div class="card-header text-light font-weight-bold" style="">
		{{-- <div class="card-title"> --}}
			<i class="{{ Config::get('icons.comments') }}"></i>
			Comments <small>({{ $post->comments()->count() }} total)</small>
		{{-- </div> --}}
	</div>

	<div class="card-body card-trans-2 text-dark p-2">
		@if($post->comments->count())
			<table class="table table-sm table-hover">
				<thead>
					<tr class="row">
						<th class="col-xl-3">Name</th>
						<th class="col-xl-7">Comment</th>
						<th class="col-xl-2">Posted On</th>
					</tr>
				</thead>
				<tbody>
					@foreach($post->comments as $comment)
					<tr class="row">
						<td class="col-xl-3">
							{{-- @include('common.authorFormat', ['model'=>$comment, 'field'=>'user']) --}}
							{{ $comment->user->username }}
						</td>
						<td class="col-xl-7">{!! $comment->comment !!}</td>
						<td class="col-xl-2">
							{{-- @include('common.dateFormat', ['model'=>$comment, 'field'=>'created_at']) --}}
							{{ ($comment->created_at) ? date(Config::get('settings.dateFormat'), strtotime($comment->created_at)) : 'N/A' }}
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
