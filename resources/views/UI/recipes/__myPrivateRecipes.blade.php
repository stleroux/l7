@extends('layouts.UI.app-10-2')

@section ('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/recipes.css') }}">
@endsection

@section('pageHeader')
   <i class="{{ config('icons.private') }}"></i>
   My Private Recipes
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('recipes.index', 'all') }}">Recipes</a></li>
   <li class="breadcrumb-item">My Private Recipes</li>
@endsection

@section('rightColumn')
   @include('UI.recipes.blocks.sidebar')
   @include('UI.recipes.blocks.popular')
   @include('UI.recipes.blocks.archives')
@endsection

@section('content')

   <form style="display:inline;">
      {!! csrf_field() !!}
      
      <div class="card card-trans-8 mb-3">
         {{-- <div class="card-header section_header p-2">
            <i class="{{ config('buttons.private') }}"></i>
            My Private Recipes
            <span class="float-right">
               <div class="btn-group"> --}}
                  {{-- @include('recipes.buttons.help', ['size'=>'xs', 'bookmark'=>'recipes']) --}}
                  {{-- @include('recipes.buttons.unpublishAll', ['size'=>'xs']) --}}
                  {{-- @include('recipes.buttons.trashAll', ['size'=>'xs']) --}}
                  {{-- @include('recipes.buttons.add', ['size'=>'xs']) --}}
               {{-- </div>
            </span>
         </div> --}}

         @if($recipes->count() > 0)
            <div class="card-body section_body p-2">
               @include('UI.recipes.alphabet', ['model'=>'recipe', 'page'=>'myPrivateRecipes'])
               <table id="datatable" class="table table-sm table-hover">
                  <thead>
                     <tr>
                         <th><input type="checkbox" id="selectall" class="checked" /></th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Views</th>
                        <th>Author</th>
                        <th>Created On</th>
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
                        <td>@include('common.authorFormat', ['model'=>$recipe, 'field'=>'user'])</td>
                        <td>@include('common.dateFormat', ['model'=>$recipe, 'field'=>'created_at'])</td>
                        <td>@include('common.dateFormat', ['model'=>$recipe, 'field'=>'published_at'])</td>
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
               {{ config('settings.noRecordsFound') }}
            </div>
         @endif

      </div>
   </form>
   
@endsection
