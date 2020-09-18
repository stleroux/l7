@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ Config::get('icons.recipes') }}"></i>
   Published Recipes
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item">Recipes</li>
@endsection

@section('rightSidebar')
@endsection

@section('right_column')
@endsection

@section('content')

	@include('admin.recipes.index.topbar')

   <div class="row">
      <div class="col">
         <div class="card mb-3">
            <!--CARD BODY-->
            <div class="card-body p-3">
               @include('admin.recipes.index.grid')
            </div>
         </div>
      </div>
   </div>

	@include('modals.destroy', ['modelName'=>'recipe'])
   @include('modals.restore', ['modelName'=>'recipe'])
   @include('modals.massDestroy', ['modelName'=>'recipe'])
   @include('modals.massRestore', ['modelName'=>'recipe'])
   @include('modals.delete', ['modelName'=>'recipe'])
   @include('modals.massDelete', ['modelName'=>'recipe'])
   @include('modals.massPublish', ['modelName'=>'recipe'])
   @include('modals.massUnpublish', ['modelName'=>'recipe'])
   @include('modals.unpublish', ['modelName'=>'recipe'])

   @include('admin.recipes.help')

@endsection
