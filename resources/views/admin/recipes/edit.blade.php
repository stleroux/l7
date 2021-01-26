@extends('layouts.admin.admin-10-2')

@include('admin.recipes.edit.sections.stylesheet')
@include('admin.recipes.edit.sections.pageHeader')
@include('admin.recipes.edit.sections.breadcrumb')
@include('admin.recipes.edit.sections.sidebar')
@include('admin.recipes.edit.sections.blocks')
@include('admin.recipes.edit.sections.formBegin')
@include('admin.recipes.edit.sections.formEnd')

@section ('content')

   {{-- @include('admin.recipes.edit.topbar') --}}
      
   {{-- <div class="card card-primary card-outline card-outline-tabs">
      
      <div class="card-header p-0 border-bottom-0">
         @include('admin.recipes.edit.tabs')
      </div>

      <div class="card-body">
         <div class="tab-content" id="recipe-tabContent">
            @include('admin.recipes.edit.tabs.general')
            @include('admin.recipes.edit.tabs.notes')
            @include('admin.recipes.edit.tabs.image')
            @include('admin.recipes.edit.tabs.information')
            @include('admin.recipes.edit.tabs.settings')
         </div>
      </div>
      
   </div> --}}
   @include('admin.recipes.forms.form')
   @include('admin.recipes.help')
   
@endsection
