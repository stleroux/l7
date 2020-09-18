@auth

   <div class="card mb-2 card-trans-4" style="background-color: #800000">

      <div class="card-header text-light p-2">
         <i class="far fa-file-archive"></i>
         Archives
      </div>

   	@if(count($recipelinks) > 0)
         <div class="card-body card-trans-6 p-0 m-0">

            <ul class="list-group">

   				@foreach($recipelinks as $rlink)
   					<a href="{{ route('recipes.archives', ['year'=>$rlink->year, 'month'=>$rlink->month]) }}"
   						class="card-trans-2 list-group-item list-group-item-action py-1 px-1 {{ Request::is('recipes/archives/' . $rlink->year . '/' . $rlink->month) ? 'active' : '' }}">
                     <i class="fas fa-archive fa-fw"></i>
   						{{ $rlink->month_name }} - {{ $rlink->year }}
   						<span class="float-right badge badge-pill badge-maroon">{{ $rlink->recipe_count }}</span>
   					</a>
   				@endforeach

      		</ul>

   		@else
   			<div class="text text-center">No Data Available</div>
   		@endif

   	</div>

   </div>

@endauth