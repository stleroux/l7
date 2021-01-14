<!-- FEATURES -->

@if(Auth::user()->can('feature-manage') || Auth::user()->hasRole('admin'))

	<div class="col">
	   <a href="{{ route('admin.features.new') }}">
	      <div class="info-box mb-3">
	         <span class="info-box-icon bg-secondary elevation-1">
	            <i class="{{ config('icons.features') }}"></i>
	         </span>

	         <div class="info-box-content">
	            <span class="info-box-text h5">New Features</span>
	            <span class="info-box-number">
	               {{-- {{ DB::table("permissions")->count() }} --}}
	               Total : {{ $newFeaturesCount }}
	            </span>
	         </div><!-- /.info-box-content -->
	      </div><!-- /.info-box -->
	   </a>
	</div><!-- /.col -->

@endif
