@extends('layouts.UI.app-10-2')

@section('stylesheet')
	<link rel="stylesheet" href="{{ asset('css/UI/recipes.css') }}">
@endsection

@section('pageHeader')
	<i class="{{ Config::get('icons.recipes') }}"></i>
	Recipes
	@if($byCatName)
		:: {{  deliciousCamelcase(ucwords($byCatName->name)) }}
	@endif
@endsection

@section('breadcrumb')
	<li class="breadcrumb-item">Recipes</li>
@endsection

@section('right_column')
	@include('UI.recipes.blocks.sidebar')
	@include('UI.recipes.blocks.popular')
	@include('UI.recipes.blocks.archives')
@endsection

@section('topbar')
   @include('UI.recipes.index.list.topbar')
@endsection

@section('content')

	@if($recipes->count() > 0)
	  
     <div class="card card-trans-2 mb-3">

         <div class="card-body card-trans-2 p-2 text-light">

            @include('UI.recipes.index.list.alphabet')

            <table id="datatable" class="table table-sm table-hover">
               <thead class="">
                  <tr>
                     <th>Name</th>
                     <th>Category</th>
                     <th class="d-none d-lg-table-cell">Views</th>
                     <th class="d-none d-lg-table-cell">Created By</th>
                     <th class="d-none d-lg-table-cell">Created On</th>
                     <th class="d-none d-lg-table-cell">Publish(ed) On</th>
                     <th data-orderable="false"></th>
                  </tr>
               </thead>
               <tbody class="">
                  @foreach($recipes as $recipe)
                     <tr>
                        <td>
                           {{ ucwords($recipe->title) }}
                        </td>
                        <td>
                           {{ ucwords($recipe->category->name) }}
                        </td>
                        <td class="d-none d-lg-table-cell">
                           {{ $recipe->views }}
                        </td>
                        <td class="d-none d-lg-table-cell">
                           @include('common.authorFormat', ['model'=>$recipe, 'field'=>'user'])
                        </td>
                        <td class="d-none d-lg-table-cell">
                           @include('common.dateFormat', ['model'=>$recipe, 'field'=>'created_at'])
                        </td>
                        <td class="d-none d-lg-table-cell">
                           @include('common.dateFormat', ['model'=>$recipe, 'field'=>'published_at'])
                        </td>
                        <td class="text-right">
                           <div class="btn-group">
                              @auth
                                 @include('UI.recipes.index.list.buttons.favorite', ['size'=>'sm'])
                              @endauth
                              @include('UI.recipes.index.list.buttons.show', ['size'=>'sm'])
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
         {{ Config::get('settings.noRecordsFound') }}
      </div>

   @endif

@endsection
