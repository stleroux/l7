<button type="button"
	class="unpublish-model btn btn-sm btn-default"
	data-toggle="modal"
	data-target="#unpublishModal"
	data-id="{{ $post->id }}"
	data-url="{{ url('admin/posts/unpublish', $post) }}"
	title="Unpublish Post"
	>
	<i class="{{ config('icons.publish') }} text-warning"></i>
	{{-- Unpublish --}}
</button>

