@guest
{{-- 	<div class="row p-0 pb-2">
		<div class="col-sm-12">
			<div class="card bg-dark">
				<div class="card-header card_header p-2">
					<i class="fa fa-arrow-right"></i>
					Want to see more?
					<i class="fa fa-arrow-left"></i>
				</div>
				<div class="card-body card_body p-1">
					To view more details, please <a href="{{ route('login') }}" class="text text-info">LOGIN</a> if you are already a member or <a href="{{ route('register') }}" class="text text-info">REGISTER</a> an account if you are not.
					{!! Config::get('settings.viewMore') !!}
				</div>
			</div>
		</div>
	</div> --}}


	<div class="card card-trans-4 card-outline card-primary text-dark mb-2">

	   <div class="card-header bg-info p-1">
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

@endauth
