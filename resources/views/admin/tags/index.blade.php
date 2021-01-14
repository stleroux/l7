@extends('layouts.admin.admin-10-2')

@include('admin.tags.index.sections.stylesheet')
@include('admin.tags.index.sections.pageHeader')
@include('admin.tags.index.sections.breadcrumb')
@include('admin.tags.index.sections.sidebar')
@include('admin.tags.index.sections.functions')
@include('admin.tags.index.sections.formBegin')
@include('admin.tags.index.sections.formEnd')

@section('content')

   {{-- @include('admin.tags.index.topbar') --}}

   <div class="card mb-3">
      <div class="card-body p-3">
         @include('admin.tags.index.grid')
      </div>
   </div>
      
   @include('modals.destroy', ['modelName'=>'tag'])
   @include('modals.massDestroy', ['modelName'=>'tag'])
   @include('modals.restore', ['modelName'=>'tag'])
   @include('modals.massRestore', ['modelName'=>'tag'])
   @include('modals.delete', ['modelName'=>'tag'])
   @include('modals.massDelete', ['modelName'=>'tag'])
   @include('admin.tags.help')

@endsection
