@extends('layouts.admin.admin-10-2')

@include('admin.projects.projects.index.sections.stylesheet')
@include('admin.projects.projects.index.sections.pageHeader')
@include('admin.projects.projects.index.sections.breadcrumb')
@include('admin.projects.projects.index.sections.sidebar')
@include('admin.projects.projects.index.sections.functions')
@include('admin.projects.projects.index.sections.formBegin')
@include('admin.projects.projects.index.sections.formEnd')

@section('content')

   <div class="row">
      <div class="col">
         <div class="card mb-3">
            <!--CARD BODY-->
            <div class="card-body p-3">
               @include('admin.projects.projects.index.grid')
            </div>
         </div>
      </div>
   </div>

   @include('modals.destroy', ['modelName'=>'project'])
   @include('modals.massDestroy', ['modelName'=>'project'])
   @include('modals.restore', ['modelName'=>'project'])
   @include('modals.massRestore', ['modelName'=>'project'])
   @include('modals.delete', ['modelName'=>'project'])
   @include('modals.massDelete', ['modelName'=>'project'])
   @include('modals.resetViews', ['modelName'=>'project'])
   @include('modals.massResetViews', ['modelName'=>'project'])

   @include('admin.projects.projects.help')

@endsection
