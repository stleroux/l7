@guest

<div class="card card-trans-4 card-outline card-info text-dark mb-2">
   <div class="card-header bg-primary p-1">
      <div class="card-title">
      	<i class="fa fa-arrow-right"></i>
			Want to see more?
			<i class="fa fa-arrow-left"></i>
      </div>
   </div>
   <div class="card-body p-1">
   	{!! Config::get('settings.viewMore') !!}
   </div>
</div>

	{{-- <div class="row p-0 pb-2"> --}}
		{{-- <div class="col-sm-12"> --}}
		{{-- <div class="card card-trans-4 card-outline card-info mb-2">
         <div class="card-header bg-primary">
            <div class="card-title font-weight-bold">
					<i class="fa fa-arrow-right"></i>
					Want to see more?
					<i class="fa fa-arrow-left"></i>
				</div>
			</div>
			<div class="card-body card-trans-6 p-0 m-0 text-dark"> --}}
				{{-- To view more details, please <a href="{{ route('login') }}" class="text text-info">LOGIN</a> if you are already a member or <a href="{{ route('register') }}" class="text text-info">REGISTER</a> an account if you are not. --}}
				{{-- {!! Config::get('settings.viewMore') !!}
			</div>
		</div> --}}
		{{-- </div> --}}
	{{-- </div> --}}
@endauth
