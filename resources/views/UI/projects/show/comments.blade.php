<div class="card card-trans-4 card-outline card-primary text-dark mb-2">

	<div class="card-header bg-info p-1">
		<div class="card-title">
			<i class="{{ config('icons.comments') }}"></i>
			Comments
			<small>({{ $model->comments()->count() }} total)</small>
		</div>
	</div>

	<div class="card-body p-0">
		@if($model->comments->count())
			<table class="table table-sm table-sm table-hover mb-0">
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
							{{-- {{ ($comment->created_at) ? date(Config::get('settings.dateFormat'), strtotime($comment->created_at)) : 'N/A' }} --}}
							{{ $comment->created_at->format(config('settings.dateFormat')) }}
						</td>
						
					</tr>
					@endforeach
				</tbody>
			</table>
		@else
			<div class="p-1">No comments found</div>
		@endif
	</div>

</div>
