@if(Auth::user()->can('permission-manage') || Auth::user()->hasRole('admin'))
	<div class="col-xl-6">
		<h3 class="text-dark">{{ $featuresByTypeChart->options['chart_title'] }}</h3>
		{!! $featuresByTypeChart->renderHtml() !!}
	</div>
@endif
