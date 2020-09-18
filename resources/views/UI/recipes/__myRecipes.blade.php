@extends('layouts.UI.app-10-2')

@section('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/recipes.css') }}">
@endsection

@section('pageHeader')
   <i class="{{ Config::get('icons.mines') }}"></i>
   My Recipes
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('recipes.index', 'all') }}">Recipes</a></li>
   <li class="breadcrumb-item">My Recipes</li>
@endsection

@section('right_column')
   @include('UI.recipes.blocks.sidebar')
   @include('UI.recipes.blocks.popular')
   @include('UI.recipes.blocks.archives')
@endsection

@section('content')

   {{-- <form style="display:inline;">
      {!! csrf_field() !!}
 --}}      
      <div class="card mb-3 card-trans-8">
         {{-- <div class="card-header section_header p-2"> --}}
            {{-- <i class="{{ Config::get('icons.mine') }}"></i> --}}
            {{-- My Recipes --}}
            {{-- <span class="float-right"> --}}
               {{-- <div class="btn-group"> --}}
                  {{-- @include('recipes.buttons.help', ['size'=>'xs', 'bookmark'=>'recipes']) --}}
                  {{-- @include('recipes.buttons.unpublishAll', ['size'=>'xs']) --}}
                  {{-- @include('recipes.buttons.trashAll', ['size'=>'xs']) --}}
                  {{-- @include('recipes.buttons.add', ['size'=>'xs']) --}}
               {{-- </div> --}}
            {{-- </span> --}}
         {{-- </div> --}}

         @if($recipes->count() > 0)
            <div class="card-body section_body p-2">
               @include('UI.recipes.alphabet', ['model'=>'recipe', 'page'=>'newRecipes'])
               <table id="datatable" class="table table-sm table-hover">
                  <thead>
                     <tr>
                        <th data-orderable="false"><input type="checkbox" id="selectall" class="checked" /></th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Views</th>
                        <th>Created On</th>
                        <th>Private</th>
                        <th>Publish(ed) On</th>
                        <th data-orderable="false"></th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($recipes as $recipe)
                     <tr>
                        <td>
                           <input type="checkbox" onClick="checkbox_is_checked()" name="checked[]" value="{{$recipe->id}}" class="check-all">
                        </td>
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
                              @include('UI.recipes.buttons.privatize', ['size'=>'xs'])
                              @include('UI.recipes.buttons.show', ['size'=>'xs'])
                              {{-- @include('recipes.buttons.edit', ['size'=>'xs']) --}}
                              {{-- @include('recipes.buttons.trash', ['size'=>'xs']) --}}
                           </div>
                        </td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         @else
            <div class="card-body card_body p-2">
               {{ Config::get('settings.noRecordsFound') }}
              </div>
         @endif

      </div>
   {{-- </form> --}}
   
@endsection