{{-- Do not hide this panel as the information is shown in the index page list anyways --}}
<div class="col-md-3">

	<div class="card card-trans-6 mb-2">

		<div class="card-header card_header p-1">
			<div class="card-title">
				Views Last Month				
			</div>
		</div>

		<div class="card-body card_body p-1 text-center text-dark">
         {{-- {{ $recipe->views + 1 }} --}}
         {{ views($recipe)->period(CyrildeWit\EloquentViewable\Support\Period::pastMonths(1))->count() }}
      </div>
	</div>
</div>
