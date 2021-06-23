@if(Auth::user()->can('invoicer-invoice') || Auth::user()->hasRole('admin'))
	<div class="col-xl-12">
		<h3 class="text-dark">{{ $billablesByItemChart->options['chart_title'] }}</h3>
		{!! $billablesByItemChart->renderHtml() !!}
	</div>
@endif
