@if(Route::currentRouteName() == 'admin.permissions.index')
	<button type="reset" class="btn btn-sm btn-info border">
	   <i class="{{ config('icons.reset') }}"></i>
	   Reset
	</button>
@else
	<button type="reset" class="btn btn-block btn-default">
	   <i class="{{ config('icons.reset') }}"></i>
	   Reset
	</button>
@endif
