@if(Auth::user()->can('bug-manage') || Auth::user()->hasRole('admin'))
	<div class="col-xl-6">
		<h3 class="text-dark">{{ $bugsByTypeChart->options['chart_title'] }}</h3>
		{!! $bugsByTypeChart->renderHtml() !!}
	</div>
@endif
