@extends('layouts.admin.admin-10-2')

@include('admin.bugs.index.sections.stylesheet')
@include('admin.bugs.index.sections.pageHeader')
@include('admin.bugs.index.sections.breadcrumb')
@include('admin.bugs.index.sections.sidebar')
@include('admin.bugs.index.sections.blocks')
@include('admin.bugs.index.sections.formBegin')
@include('admin.bugs.index.sections.formEnd')

@section('content')

   {{-- @include('admin.bugs.index.topbar') --}}

   <div class="card mb-3">
      <div class="card-body p-3">
         @include('admin.bugs.index.grid')
      </div>
   </div>
      
   @include('modals.destroy',    ['modelName'=>'bug'])
   @include('modals.massDestroy',['modelName'=>'bug'])
   @include('modals.restore',    ['modelName'=>'bug'])
   @include('modals.massRestore',['modelName'=>'bug'])
   @include('modals.delete',     ['modelName'=>'bug'])
   @include('modals.massDelete', ['modelName'=>'bug'])
   @include('admin.bugs.help')

@endsection