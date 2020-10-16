@extends('layouts.admin.admin-10-2')

@include('admin.recipes.pages.new.sections.stylesheet')
@include('admin.recipes.pages.new.sections.pageHeader')
@include('admin.recipes.pages.new.sections.breadcrumb')
@include('admin.recipes.pages.new.sections.sidebar')
@include('admin.recipes.pages.new.sections.functions')
@include('admin.recipes.pages.new.sections.formBegin')
@include('admin.recipes.pages.new.sections.formEnd')

@section('content')

   {{-- @include('admin.recipes.pages.new.topbar') --}}

   <div class="row">
      <div class="col">
         <div class="card mb-3">
            <!--CARD BODY-->
            <div class="card-body p-3">
               @include('admin.recipes.pages.new.grid')
            </div>
         </div>
      </div>
   </div>


   @include('modals.destroy', ['modelName'=>'recipe'])
   @include('modals.massDestroy', ['modelName'=>'recipe'])
      {{-- @include('modals.restore', ['modelName'=>'recipe']) --}}
   @include('modals.massRestore', ['modelName'=>'recipe'])
   @include('modals.delete', ['modelName'=>'recipe'])
   @include('modals.massDelete', ['modelName'=>'recipe'])
   @include('modals.massPublish', ['modelName'=>'recipe'])
   @include('modals.massUnpublish', ['modelName'=>'recipe'])
   @include('admin.recipes.help')

@endsection
