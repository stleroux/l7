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
   <li class="breadcrumb-item">My Recipes</li>
@endsection

@section('rightColumn')
   @include('UI.recipes.blocks.sidebar')
   @include('UI.recipes.blocks.popular')
   @include('UI.recipes.blocks.archives')
@endsection

@section('topbar')
   @include('UI.recipes.favoriteRecipes.list.topbar')
@endsection

@section('content')

   @if($recipes->count() > 0)
      <div class="card card-trans-2 mb-3 text-light">
         <div class="card-body card-trans-2 p-2">
            {{-- @include('UI.recipes.myRecipes.list.alphabet') --}}
            <table id="datatable" class="table table-sm table-hover">
               <thead class="">
                  <tr>
                     {{-- <th data-orderable="false"><input type="checkbox" id="selectall" class="checked" /></th> --}}
                     <th>Name</th>
                     <th>Category</th>
                     <th>Views</th>
                     <th>Created On</th>
                     <th>Private</th>
                     <th>Publish(ed) On</th>
                     <th data-orderable="false"></th>
                  </tr>
               </thead>
               <tbody class="">
                  @foreach($recipes as $recipe)
                  <tr>
                     {{-- <td>
                        <input type="checkbox" onClick="checkbox_is_checked()" name="checked[]" value="{{$recipe->id}}" class="check-all">
                     </td> --}}
                     <td>{{ ucwords($recipe->title) }}</td>
                     <td>{{ ucwords($recipe->category->name) }}</td>
                     <td>{{ $recipe->views }}</td>
                     <td>
                        @include('common.dateFormat', ['model'=>$recipe, 'field'=>'created_at'])
                     </td>
                     <td>{{ $recipe->personal ? 'Yes' : 'No'}}</td>
                     <td>
                        @include('common.dateFormat', ['model'=>$recipe, 'field'=>'published_at'])
                     </td>
                     <td class="text-right">
                        <div class="btn-group">
                           @include('UI.recipes.favoriteRecipes.list.buttons.removeFavorite', ['size'=>'sm', 'btn_label'=>''])
                           @include('UI.recipes.favoriteRecipes.list.buttons.show', ['size'=>'sm'])
                           {{-- @include('recipes.buttons.edit', ['size'=>'xs']) --}}
                           {{-- @include('recipes.buttons.trash', ['size'=>'xs']) --}}
                        </div>
                     </td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
      </div>

   @else

      <div class="col-row p-3 card-trans-4 text-light">
         {{ config('settings.noRecordsFound') }}
        </div>
   @endif
   

@endsection
