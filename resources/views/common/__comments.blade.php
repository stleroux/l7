{{-- 
$model
$headerColor
--}}

<div class="card card-trans-0 mb-3">

	<div class="card-header p-2 text-light font-weight-bold {{ ($headerColor) ? $headerColor : '' }}"
		@if(!$headerColor)
			style="background-color: #800000"
		@endif
		>
		{{-- <div class="card-title"> --}}
			<i class="{{ config('icons.comments') }}"></i>
			Comments <small>({{ $model->comments()->count() }} total)</small>
		{{-- </div> --}}
	</div>

	<div class="card-body card-trans-6 text-dark p-0">
		@if($model->comments->count())
			<table class="table table-sm table-hover mb-0">
				<thead>
					<tr>
						<th scope="col">Name</th>
						<th scope="col">Comment</th>
						<th scope="col">Posted On</th>
					</tr>
				</thead>
				<tbody>
					@foreach($model->comments as $comment)
					<tr scope="row">
						<td>
							@include('common.authorFormat', ['model'=>$comment, 'field'=>'user'])
							{{-- {{ $comment->user->email }} --}}
						</td>
						<td>{!! $comment->comment !!}</td>
						<td>
							{{-- @include('common.dateFormat', ['model'=>$comment, 'field'=>'created_at']) --}}
							{{ $comment->created_at->format(config('settings.dateFormat')) }} 123
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
