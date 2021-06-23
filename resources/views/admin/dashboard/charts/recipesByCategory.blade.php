@if(Auth::user()->can('recipe-manage') || Auth::user()->hasRole('admin'))
	<div class="col-xl-12">
		<h3 class="text-dark">{{ $recipesByCategoryChart->options['chart_title'] }}</h3>
		{!! $recipesByCategoryChart->renderHtml() !!}
	</div>
@endif
