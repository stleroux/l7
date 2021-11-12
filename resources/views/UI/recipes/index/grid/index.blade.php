@extends('layouts.UI.app-10-2')

@section('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/recipes.css') }}">
@endsection

@section('pageHeader')
   <i class="{{ config('icons.recipes') }}"></i>
   Recipes
   @if($byCatName)
      :: {{  deliciousCamelcase(ucwords($byCatName->name)) }}
   @endif
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item">Recipes</li>
@endsection

@section('rightColumn')
   @include('UI.recipes.blocks.sidebar')
   @include('UI.recipes.blocks.popular')
   @include('UI.recipes.blocks.archives')
   @include('UI.recipes.blocks.faqs')
@endsection

@section('topbar')
   @include('UI.recipes.index.grid.topbar')
@endsection

@section('content')

   @if($recipes->count() > 0)

      <div class="card card-trans-2 mb-3">

         <div class="card-body section_body p-1">

            <div class="my-1">
               @include('UI.recipes.index.grid.alphabet')
            </div>
            
            <div class="row justify-content-center">

               @foreach ($recipes as $recipe)
                  <div id="card-hover" class="border-2 card card-trans-2 col-7 col-sm-6 col-md-4 col-lg-3 col-xl-2 m-xl-1 pt-2 pb-2 px-1">

                     @if($recipe->published_at > \Carbon\Carbon::now()->subMonth())
                        <div class="ribbon-wrapper">
                           <div class="ribbon bg-lime m-0">New</div>
                        </div>
                     @endif

                     @if($recipe->image)
                        <a href="{{ route('recipes.show', [$recipe->id, $byCatName]) }}" class="" style="text-decoration: none;">
                           <img class="card-img-top col-10 offset-1 col-sm-12 offset-sm-0" src="\_recipes\{{ $recipe->image }}" height="120px" width="auto">
                        </a>
                     @else
                        <a href="{{ route('recipes.show', [$recipe->id, $byCatName]) }}" class="" style="text-decoration: none">
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
                              <span class="badge badge-light text-dark" title="Times Viewed">
                                 {{-- {{ $recipe->views }} --}} {{ views($recipe)->count() }} Views
                              </span>
                              <span class="badge badge-light text-dark" title="Comments">
                                 {{ $recipe->comments->count() }} Comments
                              </span>
                              <br />
                              <span class="badge badge-light text-dark" title="Times Favorited">
                                 {{ $recipe->favoritesCount }} Favorited
                              </span>
                              <span class="badge badge-light text-dark" title="Times Viewed">
                                 {{ $recipe->likes()->count() }} Likes
                              </span>
                           </p>
                        </div>
                     </div>

                     @auth
                        <div class="card-text pb-1 m-0">
                           <div class="align-self-end text-center">
                              <div class="col">
                                 @include('UI.recipes.index.grid.buttons.favorite')                               
                                 @if(auth::user()->hasRole('admin'))
                                    <a href="{{ route('admin.recipes.edit', $recipe) }}" class="btn btn-sm btn-maroon text-light">
                                       <i class="{{ config('icons.edit') }}"></i>
                                    </a>
                                 @endif
                              </div>
                           </div>
                        </div>
                     @endauth

                     <div class="row-col text-center pt-2">
                        @auth
                           @can('like', $recipe)
                              <form class="" action="{{ route('like') }}" method="POST">
                                 @csrf
                                 <input type="hidden" name="likeable_type" value="{{ get_class($recipe) }}"/>
                                 <input type="hidden" name="id" value="{{ $recipe->id }}"/>
                                 <button class="btn btn-block btn-xs btn-outline-success text-light">@lang('Like')</button>
                              </form>
                           @else
                              <form class="" action="{{ route('unlike') }}" method="POST">
                                 @csrf
                                 @method('DELETE')
                                 <input type="hidden" name="likeable_type" value="{{ get_class($recipe) }}"/>
                                 <input type="hidden" name="id" value="{{ $recipe->id }}"/>
                                 <button class="btn btn-block btn-xs btn-outline-danger text-light">@lang('Unlike')</button>
                              </form>
                           @endcan
                        @endauth
                     </div>

                     <div class="card-footer px-1 py-0 mb-0">
                        <div class="text-center">
                           By {{ $recipe->user->username }}
                        </div>
                     </div>

                  </div>
               @endforeach
            </div>

            {{-- SHOW PAGINATION --}}
            <div class="row">
               <div class="col ml-2 text-light">
                  Showing {{ $recipes->firstItem() }} to {{ $recipes->lastItem() }} of {{$recipes->total()}} entries
               </div>
               <div class="col text-right p-0 m-0">
                  {{ $recipes->links('UI.recipes.pagination.custom') }}
               </div>
            </div>

         </div>
      </div>

   @else
         
      <div class="col-row p-3 card-trans-4 text-light">
         {{ config('settings.noRecordsFound') }}
      </div>

   @endif


@endsection
