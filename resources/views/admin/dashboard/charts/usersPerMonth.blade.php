@if(Auth::user()->can('user-manage') || Auth::user()->hasRole('admin'))
	<div class="col col-xl-6">
		<h3 class="text-dark">{{ $usersPerMonthChart->options['chart_title'] }}</h3>
		{!! $usersPerMonthChart->renderHtml() !!}
	</div>
@endif
