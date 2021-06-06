<!-- BUGS -->

@if(Auth::user()->can('bug-manage') || Auth::user()->hasRole('admin'))

	<div class="col-6 col-xl-4">
	   <a href="{{ route('admin.bugs.new') }}">
	      <div class="info-box mb-3">
	         <span class="info-box-icon bg-secondary elevation-1">
	            <i class="{{ config('icons.bugs') }}"></i>
	         </span>

	         <div class="info-box-content">
	            <span class="info-box-text h5">New Bugs</span>
	            <span class="info-box-number">
	               {{-- {{ DB::table("permissions")->count() }} --}}
	               Total : {{ $newBugsCount }}
	            </span>
	         </div><!-- /.info-box-content -->
	      </div><!-- /.info-box -->
	   </a>
	</div><!-- /.col -->

@endif
