<div class="card card-trans-0 card-outline card-primary mb-3">

	<div class="card-header bg-info text-light">
		{{-- <div class="card-title"> --}}
			<strong>
				<i class="{{ Config::get('icons.comments') }}"></i>
				Comments
			</strong>
			<small>({{ $model->comments()->count() }} total)</small>
		{{-- </div> --}}
	</div>

	<div class="card-body card-trans-6 text-dark p-0">
		@if($model->comments->count())
			<table class="table table-sm table-hover mb-0">
				<thead>
					<tr class="d-flex">
						<th class="col-3">Name</th>
						<th class="col-7">Comment</th>
						<th class="col-2">Posted On</th>
					</tr>
				</thead>
				<tbody>
					@foreach($model->comments as $comment)
					<tr class="d-flex">
						<td class="col-3">
							{{-- @include('common.authorFormat', ['model'=>$comment, 'field'=>'user']) --}}
							{{ $comment->user->username }}
						</td>
						<td class="col-7">{!! $comment->comment !!}</td>
						<td class="col-2">
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
