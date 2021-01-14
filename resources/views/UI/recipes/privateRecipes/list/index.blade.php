@extends('layouts.UI.app-10-2')

@section('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/recipes.css') }}">
@endsection

@section('pageHeader')
   <i class="{{ config('icons.private') }}"></i>
   Private Recipes
   @if($byCatName)
      :: {{  deliciousCamelcase(ucwords($byCatName->name)) }}
   @endif
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('recipes.indexGrid', 'all') }}">Recipes</a></li>
   <li class="breadcrumb-item">Private Recipes</li>
@endsection

@section('rightColumn')
   @include('UI.recipes.blocks.sidebar')
   @include('UI.recipes.blocks.popular')
   @include('UI.recipes.blocks.archives')
@endsection

@section('content')

   <div class="row pb-2">
      <div class="col">
         <span class="float-right">
            <div class="btn-group">
               @include('UI.recipes.privateRecipes.list.buttons.list', ['size'=>'sm', 'btn_label'=>'Private Recipes'])
               @include('UI.recipes.privateRecipes.list.buttons.ddList', ['size'=>'sm'])
               @include('UI.recipes.buttons.printAll', ['size'=>'sm', 'btn_label'=>'Print All'])
               {{-- @include('admin.recipes.buttons.add', ['size'=>'sm']) --}}
            </div>
            <div class="btn-group">
               <a href="{{ route('recipes.privateRecipesGrid', 'all') }}" class="btn btn-sm btn-maroon">
                  <i class="{{ config('icons.grid') }}"></i>
                  Grid
               </a>
               <a href="{{ route('recipes.privateRecipesList', 'all') }}" class="btn btn-sm btn-light">
                  <i class="{{ config('icons.list') }}"></i>
                  List
               </a>
            </div>
         </span>
      </div>
   </div>

   <div class="card card-trans-2 mb-3 text-light">
      @if($recipes->count() > 0)
         <div class="card-body card-trans-2 p-2">
            @include('UI.recipes.privateRecipes.list.alphabet')
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
                           @include('UI.recipes.privateRecipes.list.buttons.privatize', ['size'=>'sm'])
                           @include('UI.recipes.privateRecipes.list.buttons.show', ['size'=>'sm'])
                           {{-- @include('recipes.buttons.edit', ['size'=>'xs']) --}}
                           {{-- @include('recipes.buttons.trash', ['size'=>'xs']) --}}
                        </div>
                     </td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
         </div>

         <div class="row justify-content-center pagination-sm p-1">
            {{ $recipes->links('UI.recipes.pagination.custom') }}
         </div>
      @else
         <div class="card-body card_body p-2">
            {{ config('settings.noRecordsFound') }}
         </div>
      @endif

   </div>
@endsection
