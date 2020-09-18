<div class="card card-trans-4 bg-primary mb-2">
	
	<div class="card-header p-2">My Contributions</div>

	<div class="card-body card-trans-6 p-0 m-0">

		<ul class="list-group">
			<!-- COMMENTS -->
		   <a href="{{-- {{ route('') }} --}}"
		   	role="button"
		      class="card-trans-2 list-group-item list-group-item-action p-1">
		      <div class="text text-left">Comments
			      <span class="badge badge-maroon float-right">
			         {{ App\Models\Comment::where('user_id','=', Auth::user()->id)->count() }}
			      </span>
		      </div>
		   </a>

		   <!-- POSTS -->
		   <a href="{{-- {{ route('') }} --}}"
		   	role="button"
		      class="card-trans-2 list-group-item list-group-item-action p-1">
		      <div class="text text-left">Posts
			      <span class="badge badge-maroon float-right">
			         {{-- {{ App\Models\Posts\Post::where('user_id','=', Auth::user()->id)->count() }} --}}
			      </span>
		      </div>
		   </a>

			<!-- RECIPES -->
		   <a href="{{ route('recipes.myRecipesGrid', 'all') }}"
		   	role="button"
		      class="card-trans-2 list-group-item list-group-item-action p-1">
		      <div class="text text-left">Recipes
			      <span class="badge badge-maroon float-right">
			         {{ App\Models\Recipe::where('user_id','=', Auth::user()->id)->count() }}
			      </span>
		      </div>
		   </a>

		</ul>

	</div>

</div>
