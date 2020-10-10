<div class="row pb-2">

	<div class="col">

		<span class="float-right">

			<div class="btn-group">
				@include('UI.recipes.index.grid.buttons.grid', ['size'=>'sm', 'btn_label'=>'All Recipes'])
				@include('UI.recipes.index.grid.buttons.ddGrid', ['size'=>'sm'])
				@include('UI.recipes.buttons.printAll', ['size'=>'sm', 'btn_label'=>'Print All'])
			</div>

         <div class="btn-group">
            <a href="{{ route('recipes.indexGrid', 'all') }}" class="btn btn-sm btn-light">
               <i class="{{ Config::get('icons.grid') }}"></i>
               Grid
            </a>
            <a href="{{ route('recipes.indexList', 'all') }}" class="btn btn-sm btn-maroon">
               <i class="{{ Config::get('icons.list') }}"></i>
               List
            </a>
         </div>

      </span>

   </div>

</div>
