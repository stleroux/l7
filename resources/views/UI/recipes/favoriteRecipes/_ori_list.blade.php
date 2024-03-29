@extends('layouts.UI.app-10-2')

@section ('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/recipes.css') }}">
@endsection

@section('pageHeader')
   <i class="{{ config('icons.favorite') }}"></i>
   My Favorite Recipes
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

@section('content')

   <form style="display:inline;">
      {!! csrf_field() !!}

      <div class="card mb-3 card-trans-8">
         {{-- <div class="card-header section_header p-2">
            <i class="fas fa-heart"></i>
            My Favorite Recipes
            <span class="float-right">
               <div class="btn-group"> --}}
                  {{-- @include('recipes.buttons.help', ['size'=>'xs', 'bookmark'=>'recipes']) --}}
                  {{-- @include('recipes.buttons.unpublishAll', ['size'=>'xs']) --}}
                  {{-- @include('recipes.buttons.trashAll', ['size'=>'xs']) --}}
                  {{-- @include('recipes.buttons.add', ['size'=>'xs']) --}}
               {{-- </div>
            </span>
         </div> --}}

         <div class="card-body section_body p-2">
            @if($recipes->count() > 0)
               @foreach($recipes->chunk(6) as $chunk)
                  <div class="card-deck mb-0 px-2">
                     @foreach($chunk as $recipe)
                        <div class="card col-xs-12 col-sm-6 col-md-4 col-lg-2 p-0 m-2">
                           @if($recipe->image)
                              <a href="{{ route('recipes.show', $recipe->id) }}" class="" style="text-decoration: none">
                                 <img class="card-img-top" src="\_recipes\{{ $recipe->image }}" height="100px" width="100%">
                              </a>
                           @else
                              <a href="{{ route('recipes.show', $recipe->id) }}" class="" style="text-decoration: none">
                                 <img class="card-img-top" src="\_recipes\image_not_available.jpg" height="100px" width="100%">
                              </a>
                           @endif
                           <div class="card-body pt-1 pb-0">
                              <a href="{{ route('recipes.show', $recipe->id) }}" class="" style="text-decoration: none">
                                 <h6 class="card-title text-center pb-2 m-0">
                                    {{ ucwords($recipe->title) }}
                                 </h6>
                              </a>
                           </div>

                           <div class="card-text p-0 m-0 text-center">
                              <div class="align-self-end">
                                 <p>
                                    <span class="badge badge-light text-dark" title="Times Viewed">{{ $recipe->views }} Views</span>
                                    <span class="badge badge-light text-dark" title="Comments">{{ $recipe->comments->count() }} Comments</span>
                                    <br />
                                    <span class="badge badge-light text-dark" title="Times Favorited">{{ App\Models\UI\Recipe::find($recipe->id)->favoritesCount }} Favorited</span>
                                 </p>
                              </div>   
                           </div>

                           @auth
                              <div class="card-text pb-1 m-0">
                                 <div class="align-self-end text-center">
                                    @include('UI.recipes.buttons.favorite', ['size'=>'xs'])
                                 </div>
                              </div>
                           @endauth

                           <div class="card-footer px-1 py-0 text-center">
                              <small class="">
                                 By
                                 @if($recipe->user->first_name && $recipe->user->last_name)
                                    {{ ucwords($recipe->user->first_name) }} {{ ucwords($recipe->user->last_name) }}
                                 @else
                                    {{ $recipe->user->username }}
                                 @endif
                              </small>
                           </div>
                        </div>
                     @endforeach
                  </div>
               @endforeach
            @else
            {{-- <div class="card-body card_body p-2"> --}}
               {{ config('settings.noRecordsFound') }}
            @endif
         </div>
      </div>
      
   </form>
   
@endsection
