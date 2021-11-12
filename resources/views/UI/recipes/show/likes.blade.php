{{-- Do not hide this panel as the information is shown in the index page list anyways --}}
<div class="col-md-3">

	<div class="card card-trans-6 mb-2">

		<div class="card-header card_header p-1">
         <div class="card-title">
            Likes            
         </div>
      </div>

		<div class="card-body card_body p-1 text-center text-dark">

         {{ $recipe->likes()->count() }}
{{--          @if($recipe->likes()->count() > 0)
            @if($recipe->likes()->count() == 1)
            <small class="">Liked {{ $recipe->likes()->count() }} time by others</small>
            @else
            <small class="">Liked {{ $recipe->likes()->count() }} times by others</small>
            @endif
            @else
            <small class="text-steel">Not liked by anyone yet</small>
            @endif --}}
      </div>
	</div>
</div>
