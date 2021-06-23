@if(Auth::user()->can('feature-manage') || Auth::user()->hasRole('admin'))
	<div class="col-xl-12">
		<h3 class="text-dark">{{ $carvingsByCategoryChart->options['chart_title'] }}</h3>
		{!! $carvingsByCategoryChart->renderHtml() !!}
	</div>
@endif
