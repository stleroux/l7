@extends('layouts.admin.admin-10-2')

@include('admin.recipes.index.sections.stylesheet')
@include('admin.recipes.index.sections.pageHeader')
@include('admin.recipes.index.sections.breadcrumb')
@include('admin.recipes.index.sections.sidebar')
@include('admin.recipes.index.sections.functions')
@include('admin.recipes.index.sections.formBegin')
@include('admin.recipes.index.sections.formEnd')

@section('content')

	{{-- @include('admin.recipes.index.topbar') --}}

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
   @include('modals.massDestroy', ['modelName'=>'recipe'])
   @include('modals.restore', ['modelName'=>'recipe'])
   @include('modals.massRestore', ['modelName'=>'recipe'])
   @include('modals.delete', ['modelName'=>'recipe'])
   @include('modals.massDelete', ['modelName'=>'recipe'])
   @include('modals.massPublish', ['modelName'=>'recipe'])
   @include('modals.massUnpublish', ['modelName'=>'recipe'])
   @include('modals.unpublish', ['modelName'=>'recipe'])
   @include('modals.resetViews', ['modelName'=>'recipe'])
   @include('modals.massResetViews', ['modelName'=>'recipe'])

   @include('admin.recipes.help')

@endsection
