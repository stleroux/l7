@extends('layouts.UI.app-10-2')

@section('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/recipes.css') }}">
@endsection

@section('pageHeader')
   <i class="{{ config('icons.favorite') }}"></i>
   My Favorite Recipes
{{--    @if($byCatName)
		:: {{  deliciousCamelcase(ucwords($byCatName->name)) }}
	@endif --}}
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('recipes.indexGrid', 'all') }}">Recipes</a></li>
   <li class="breadcrumb-item">My Favorite Recipes</li>
@endsection

@section('rightColumn')
   @include('UI.recipes.blocks.sidebar')
   @include('UI.recipes.blocks.popular')
   @include('UI.recipes.blocks.archives')
@endsection

@section('topbar')
   @include('UI.recipes.favoriteRecipes.grid.topbar')
@endsection

@section('content')

	@if($recipes->count() > 0)
	   <div class="card mb-3 card-trans-2">
			<div class="card-body section_body p-1">
				<div class="my-1">
					{{-- @include('UI.recipes.favoriteRecipes.grid.alphabet') --}}
				</div>
					
				<div class="row justify-content-center">
					@foreach ($recipes as $recipe)
						<div id="card-hover" class="border-2 card card-trans-2 col-7 col-sm-6 col-md-4 col-lg-3 col-xl-2 m-xl-1 pt-2 pb-2 px-1">

							@if($recipe->image)
								<a href="{{ route('recipes.show', $recipe->id) }}" class="" style="text-decoration: none;">
									<img class="card-img-top col-10 offset-1 col-sm-12 offset-sm-0" src="\_recipes\{{ $recipe->image }}" height="120px" width="auto">
								</a>
							@else
								<a href="{{ route('recipes.show', $recipe->id) }}" class="" style="text-decoration: none">
									<img class="card-img-top col-10 offset-1 col-sm-12 offset-sm-0" src="\_recipes\image_not_available.jpg" height="120px" width="auto">
								</a>
							@endif

							<div class="card-body pt-1 pb-0">
								<div class="row justify-content-center text-center">
									<span class="card-title pb-2 m-0 font-weight-bold">
										{{ ucwords($recipe->title) }}
									</span>
								</div>
							</div>

							<div class="card-text p-0 m-0 text-center">
								<div class="align-self-end">
									<p>
										<span class="badge badge-light text-dark" title="Times Viewed">{{ $recipe->views }} Views</span>
										<span class="badge badge-light text-dark" title="Comments">{{ $recipe->comments->count() }} Comments</span>
										<br />
										<span class="badge badge-light text-dark" title="Times Favorited">
	                              {{ $recipe->favoritesCount }} Favorited
	                           </span>
									</p>
								</div>	
							</div>

							@auth
								<div class="card-text pb-1 m-0">
									<div class="align-self-end text-center">
										{{-- @if(!$recipe->isFavorited()) --}}
											@include('UI.recipes.favoriteRecipes.grid.buttons.removeFavorite', ['size'=>'xs', 'btn_label'=>'Remove'])
										{{-- @else --}}
											{{-- @include('common.buttons.favoriteRemove', ['name'=>'recipe', 'model'=>$recipe]) --}}
										{{-- @endif --}}
									</div>
								</div>
							@endauth

							<div class="card-footer px-1 py-0 text-center">
								<small class="">
									By
									@if($recipe->user->first_name && $recipe->user->last_name)
										{{ ucwords($recipe->user->first_name) }} {{ ucwords($recipe->user->last_name) }}
									@else
										{{ $recipe->user->email }}
									@endif
								</small>
							</div>

						</div>
					@endforeach
				</div>

				{{-- SHOW PAGINATION --}}
{{-- 				<div class="row">
					<div class="col ml-2 text-light">
						Showing records {{ $recipes->firstItem() }} to {{ $recipes->lastItem() }} of {{$recipes->total()}}						
					</div>
					<div class="col text-right pagination-sm p-0 m-0">
						{{ $recipes->links('UI.recipes.pagination.custom') }}
					</div>
				</div> --}}

			</div>
		</div>

	@else

		<div class="col-row p-3 card-trans-4 text-light">
         {{ config('settings.noRecordsFound') }}
      </div>

   @endif

@endsection
