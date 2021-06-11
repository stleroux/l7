@if($post->image)
	<a
		href="{{ route('admin.posts.deleteImage', $post->id) }}"
		class="btn btn-block btn-outline-pink"
		onclick="return confirm('Delete the image?')"
	>
		Delete Image
	</a>
@endif
