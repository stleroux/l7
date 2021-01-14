{{-- @if(checkPerm('comment_add')) --}}
@auth
	<div class="card mb-3 card-trans-4">
		<div class="card-header block_header p-2">
			<i class="fa fa-comment"></i>
			Leave A Comment
		</div>
		<div class="card-body pt-1 pb-2">
			{{-- {{ Form::open(['route' => ['blog.storeComment', $post->id], 'method' => 'POST']) }} --}}
			<form action="{{ route('blog.storeComment', $post->id) }}" method="POST">
				@csrf
				<div class="row">
					<div class="col py-0 px-0">
						<div class="form-group {{ $errors->has('comment') ? 'has-error' : '' }}">
							{{-- {{ Form::label('comment', "Comment:") }} --}}
							{{-- <label for="comment">Comment</label> --}}
							{{-- {{ Form::textarea('comment', null, ['class' => 'form-control form-control-sm plain', 'rows' => '5']) }} --}}
							<textarea name="comment" rows="5" class="form-control form-control-sm plain"></textarea>
							<span class="text-danger">{{ $errors->first('comment') }}</span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col py-0 px-0">
						{{-- {{ Form::submit('Add Comment', ['class' => 'btn btn-success btn-block', 'style' => 'margin-top:15px;']) }} --}}
						{{-- {{ Form::button('<i class="fa fa-plus-circle"></i> Add Comment', ['type' => 'submit', 'class' => 'btn btn-sm btn-success btn-block'] )  }} --}}
						<button type="submit" name="add" class="btn btn-sm btn-success btn-block">
							<i class="{{ Config::get('icons.create') }}"></i>

							Add Comment
						</button>
					</div>
				</div>
			</form>
		</div>
		<div class="card-footer py-1 px-1">
			Be a sport and keep your comments clean, otherwise they will be removed and you risk being banned from the site.
		</div>
	</div>
@endauth
{{-- @endif --}}