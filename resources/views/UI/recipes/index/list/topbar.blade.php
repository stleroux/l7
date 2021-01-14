<div class="row pb-2">

	<div class="col">

		<span class="float-right">

			<div class="btn-group">
				@include('UI.recipes.index.list.buttons.list', ['size'=>'sm', 'btn_label'=>'All Recipes'])
				@include('UI.recipes.index.list.buttons.ddList', ['size'=>'sm'])
				@auth
               @include('UI.recipes.buttons.printAll', ['size'=>'sm', 'btn_label'=>'Print All'])
            @endauth
			</div>

         <div class="btn-group">
            <a href="{{ route('recipes.indexGrid', 'all') }}" class="btn btn-sm btn-maroon">
               <i class="{{ config('icons.grid') }}"></i>
               Grid
            </a>
            <a href="{{ route('recipes.indexList', 'all') }}" class="btn btn-sm btn-light">
               <i class="{{ config('icons.list') }}"></i>
               List
            </a>
         </div>

      </span>

   </div>
   
</div>
