<!-- AUDITS -->

@if(Auth::user()->can('admin-audits') || Auth::user()->hasRole('admin'))

	<div class="col-6 col-xl-4">
	   <a href="{{-- {{ route('admin.bugs.new') }} --}}">
	      <div class="info-box mb-3">
	         <span class="info-box-icon bg-secondary elevation-1">
	            <i class="{{ config('icons.audits') }}"></i>
	         </span>

	         <div class="info-box-content">
	            <span class="info-box-text h5">Audits</span>
	            <span class="info-box-number">
	               {{-- {{ DB::table("permissions")->count() }} --}}
	               Total : {{ $auditsCount }}
	            </span>
	         </div><!-- /.info-box-content -->
	      </div><!-- /.info-box -->
	   </a>
	</div><!-- /.col -->

@endif
