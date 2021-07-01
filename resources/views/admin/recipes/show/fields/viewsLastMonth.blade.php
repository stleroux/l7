{{-- Do not hide this panel as the information is shown in the index page list anyways --}}
<div class="col-md-3">
	<div class="card card-secondary mb-2">
		<div class="card-header p-1">Views Last Month</div>
		<div class="card-body p-1 text-center">
         {{-- {{ $recipe->views + 1 }} --}}
         {{ views($recipe)->period(CyrildeWit\EloquentViewable\Support\Period::pastMonths(1))->count() }}
      </div>
	</div>
</div>
