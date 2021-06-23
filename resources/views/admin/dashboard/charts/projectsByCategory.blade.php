@if(Auth::user()->can('project-manage') || Auth::user()->hasRole('admin'))
	<div class="col-xl-6">
		<h3 class="text-dark">{{ $projectsByCategoryChart->options['chart_title'] }}</h3>
		{!! $projectsByCategoryChart->renderHtml() !!}
	</div>
@endif
