<!-- PERMISSIONS -->

@if(Auth::user()->can('permission-manage') || Auth::user()->hasRole('admin'))

	<div class="col">
	   <a href="{{ route('admin.permissions.index') }}">
	      <div class="info-box mb-3">
	         <span class="info-box-icon bg-warning elevation-1">
	            <i class="{{ Config::get('icons.permissions') }}"></i>
	         </span>

	         <div class="info-box-content">
	            <span class="info-box-text h4">Permissions</span>
	            <span class="info-box-number">
	               {{-- {{ DB::table("permissions")->count() }} --}}
	               Total : {{ $permissionsCount }}
	            </span>
	         </div><!-- /.info-box-content -->
	      </div><!-- /.info-box -->
	   </a>
	</div><!-- /.col -->

@endif
