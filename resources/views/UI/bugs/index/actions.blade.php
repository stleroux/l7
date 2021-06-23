<div class="row float-right">

	@if($bug->status != "Resolved" && $bug->status != "Non Issue" && $bug->status != "Not Reproducible")

		@if($bug->user_id != Auth::id())
			@can('like', $bug)
				<form class="pr-1" action="{{ route('like') }}" method="POST">
					@csrf
					<input type="hidden" name="likeable_type" value="{{ get_class($bug) }}"/>
					<input type="hidden" name="id" value="{{ $bug->id }}"/>
					<button class="btn btn-block btn-sm btn-success text-dark font-weight-bold">@lang('Like')</button>
				</form>
			@else
				<form class="pr-1" action="{{ route('unlike') }}" method="POST">
					@csrf
					@method('DELETE')
					<input type="hidden" name="likeable_type" value="{{ get_class($bug) }}"/>
					<input type="hidden" name="id" value="{{ $bug->id }}"/>
					<button class="btn btn-block btn-sm btn-danger text-dark"><strong>@lang('Unlike')</strong></button>
				</form>
			@endcan
		@endif
		
	@endif

	@if($bug->status == 'New' || $bug->status == 'Pending')
		@if($bug->user_id == Auth::id())
			<a href="#"
				class="destroy-model btn btn-sm btn-default mr-1"
				data-toggle="modal"
				data-target="#destroyModal"
				data-id="{{ $bug->id }}"
				data-url="{{ url('bugs', $bug->id) }}">
				<i class="{{ config('icons.trash') }} text-pink"></i>
				Trash
			</a>

			<a href="{{ route('bugs.edit', $bug) }}" class="btn btn-sm btn-default mr-1">
				<i class="{{ config('icons.edit') }} text-primary"></i>
				Edit
			</a>
		@endif
	@endif

	<a href="{{ route('bugs.show', $bug) }}" class="btn btn-sm btn-default mr-1">
		<i class="{{ config('icons.view') }} text-primary"></i>
		View
	</a>

</div>
