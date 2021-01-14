
<div class="row">
	<div class="col-sm-4">
		<h1 class="text-center">INVOICE</h1>
	</div>
	<div class="col-sm-8">
		<div class="col-sm-12">
			<h3 class="text-center">
				{{ config('invoicer.companyName') }}
			</h3>
		</div>
		<div class="row">
			<div class="col-sm-12 text-center">
				{{ config('invoicer.address_1') . ', ' }}
				{{ (Config::get('invoicer.address_2')) ? Config::get('invoicer.address_2') . ', ' : '' }}
				{{ (Config::get('invoicer.city')) ? Config::get('invoicer.city') . ', ' : '' }}
				{{ (Config::get('invoicer.state')) ? Config::get('invoicer.state') . ', ' : '' }}
				{{ (Config::get('invoicer.zip')) ? Config::get('invoicer.zip') : '' }}
				<br />
				@if(Config::get('invoicer.telephone') && (Config::get('invoicer.fax')))
					<i class='fas fa-phone'></i> {{ config('invoicer.telephone') }} &nbsp;
					<i class="fas fa-fax"></i> {{ config('invoicer.fax') }}
				@elseif(Config::get('invoicer.telephone'))
					<i class='fas fa-phone'></i> {{ config('invoicer.telephone') }}
				@elseif (Config::get('invoicer.fax'))
					<i class="fas fa-fax"></i> {{ config('invoicer.fax') }}
				@endif

				<br />
				@if(Config::get('invoicer.email') && (Config::get('invoicer.website')))
					<i class="fas fa-at"></i> {{ config('invoicer.email') }}
					&nbsp;
					<a href="http://thewoodbarn.ca" target="_blank">
						<i class="fas fa-newspaper"></i> {{ config('invoicer.website') }}
					</a>
				@elseif(Config::get('invoicer.email'))
					<i class="fas fa-at"></i> {{ config('invoicer.email') }}
				@elseif(Config::get('invoicer.website'))
					<a href="http://thewoodbarn.ca" target="_blank">
						<i class="fas fa-newspaper"></i> {{ config('invoicer.website') }}
					</a>
				@endif

				<br />
				@if(Config::get('invoicer.wsibNo') && (Config::get('invoicer.hstNo')))
					WSIB N<sup>o</sup>: {{ config('invoicer.wsibNo') }} &nbsp;
					HST N<sup>o</sup>: {{ config('invoicer.hstNo') }}
				@elseif(Config::get('invoicer.wsibNo'))
					WSIB N<sup>o</sup>: {{ config('invoicer.wsibNo') }}
				@elseif(Config::get('invoicer.hstNo'))
					HST N<sup>o</sup>: {{ config('invoicer.hstNo') }}
				@endif
			</div>
		</div>
	</div>
</div>
