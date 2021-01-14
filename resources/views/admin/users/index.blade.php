@extends('layouts.admin.admin-10-2')

@include('admin.users.index.sections.stylesheet')
@include('admin.users.index.sections.pageHeader')
@include('admin.users.index.sections.breadcrumb')
@include('admin.users.index.sections.sidebar')
@include('admin.users.index.sections.functions')
@include('admin.users.index.sections.formBegin')
@include('admin.users.index.sections.formEnd')

@section('content')

   <div class="card card-trans mb-3">
      <div class="card-body p-3">
          @include('admin.users.index.grid')
      </div>
      <div class="card-footer p-1">
         <span class="badge badge-dark">Active accounts</span>
         <span class="badge badge-danger">Inactive Accounts</span>
      </div>
   </div>

   @include('modals.destroy', ['modelName'=>'user'])
   @include('modals.massDestroy', ['modelName'=>'user'])
   @include('modals.massApprove', ['modelName'=>'user'])
   @include('modals.massDisable', ['modelName'=>'user'])
   @include('modals.restore', ['modelName'=>'user'])
   @include('modals.massRestore', ['modelName'=>'user'])
   @include('modals.delete', ['modelName'=>'user'])
   @include('modals.massDelete', ['modelName'=>'user'])
   @include('admin.users.help')

@endsection
