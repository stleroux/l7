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

@section('content')
	<div class="row pb-2">

		<div class="col">

			<span class="float-right">

				<div class="btn-group">
					@include('UI.recipes.index.list.buttons.list', ['size'=>'sm', 'btn_label'=>'All Recipes'])
					@include('UI.recipes.index.list.buttons.ddList', ['size'=>'sm'])
					@include('UI.recipes.buttons.printAll', ['size'=>'sm', 'btn_label'=>'Print All'])
					{{-- @include('admin.recipes.buttons.add', ['size'=>'sm']) --}}
				</div>

            <div class="btn-group">
               <a href="{{ route('recipes.indexGrid', 'all') }}" class="btn btn-sm btn-maroon">
                  <i class="{{ Config::get('icons.grid') }}"></i>
                  Grid
               </a>
               <a href="{{ route('recipes.indexList', 'all') }}" class="btn btn-sm btn-light">
                  <i class="{{ Config::get('icons.list') }}"></i>
                  List
               </a>
            </div>

         </span>

      </div>
      
   </div>

	<div class="card card-trans-2 mb-3">

		@if($recipes->count() > 0)

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
                     {{-- <th class="d-none d-lg-table-cell">Private</th> --}}
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
                        {{ $recipe->user->username }}
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
      @else
         <div class="card-body card_body p-2">
            {{ Config::get('settings.noRecordsFound') }}
         </div>
      @endif

	</div>

@endsection
