<button type="button"
	class="publish-model btn btn-sm btn-default"
	data-toggle="modal"
	data-target="#publishModal"
	data-id="{{ $post->id }}"
	data-url="{{ url('admin/posts/publish', $post) }}"
	title="Publish Post"
	>
	<i class="{{ config('icons.publish') }}"></i>
	{{-- Unpublish --}}
</button>
