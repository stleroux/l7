@extends('layouts.admin.admin-10-2')

@include('admin.roles.index.sections.stylesheet')
@include('admin.roles.index.sections.pageHeader')
@include('admin.roles.index.sections.breadcrumb')
@include('admin.roles.index.sections.sidebar')
@include('admin.roles.index.sections.functions')
@include('admin.roles.index.sections.formBegin')
@include('admin.roles.index.sections.formEnd')

@section('content')

   <div class="card mb-3">
      <div class="card-body p-3">
         @include('admin.roles.index.grid')
      </div>
   </div>
      
   @include('modals.destroy', ['modelName'=>'role'])
   @include('modals.massDestroy', ['modelName'=>'role'])
   @include('modals.restore', ['modelName'=>'role'])
   @include('modals.massRestore', ['modelName'=>'role'])
   @include('modals.delete', ['modelName'=>'role'])
   @include('modals.massDelete', ['modelName'=>'role'])
   @include('admin.roles.help')

@endsection
