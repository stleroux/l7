<a href="{{ route('admin.recipes.create') }}"
   class="btn btn-sm btn-success"
   title="Add Recipe"
   type="button">
   <i class="{{ Config::get('icons.add') }}"></i>
	<div class="d-none d-lg-inline">
	   {{ $btn_label ?? 'Add Recipe' }}
	</div>
</a>
