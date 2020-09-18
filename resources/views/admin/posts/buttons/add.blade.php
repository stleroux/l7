<a href="{{ route('admin.posts.create') }}"
   class="btn btn-sm btn-success"
   title="Add Post"
   type="button">
   <i class="{{ Config::get('icons.add') }}"></i>
	<div class="d-none d-lg-inline">
	   {{ $btn_label ?? 'Add Post' }}
	</div>
</a>
