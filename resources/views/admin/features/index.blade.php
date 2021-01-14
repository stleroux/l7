@extends('layouts.admin.admin-10-2')

@include('admin.features.index.sections.stylesheet')
@include('admin.features.index.sections.pageHeader')
@include('admin.features.index.sections.breadcrumb')
@include('admin.features.index.sections.sidebar')
@include('admin.features.index.sections.functions')
@include('admin.features.index.sections.formBegin')
@include('admin.features.index.sections.formEnd')

@section('content')

   {{-- @include('admin.features.index.topbar') --}}

   <div class="card mb-3">
      <div class="card-body p-3">
         @include('admin.features.index.grid')
      </div>
   </div>
      
   @include('modals.destroy', ['modelName'=>'feature'])
   @include('modals.massDestroy', ['modelName'=>'feature'])
   @include('modals.restore', ['modelName'=>'feature'])
   @include('modals.massRestore', ['modelName'=>'feature'])
   @include('modals.delete', ['modelName'=>'feature'])
   @include('modals.massDelete', ['modelName'=>'feature'])
   @include('admin.features.help')

@endsection