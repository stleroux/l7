{{-- Do not hide this panel as the information is shown in the index page list anyways --}}
<div class="col-md-3">
	<div class="card card-secondary mb-2">
		<div class="card-header p-1">Category</div>
		<div class="card-body p-1 text-center text-dark">
         @if($recipe->category)
            {{ ucwords($recipe->category->name) }}
         @else
            Not Specified
         @endif
      </div>
	</div>
</div>
