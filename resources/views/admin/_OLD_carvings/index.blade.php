@extends('layouts.admin.admin-10-2')

@include('admin.carvings.index.sections.stylesheet')
@include('admin.carvings.index.sections.pageHeader')
@include('admin.carvings.index.sections.breadcrumb')
@include('admin.carvings.index.sections.sidebar')
@include('admin.carvings.index.sections.functions')
@include('admin.carvings.index.sections.formBegin')
@include('admin.carvings.index.sections.formEnd')

@section('content')

   <div class="row">
      <div class="col">
         <div class="card mb-3">
            <!--CARD BODY-->
            <div class="card-body p-3">
               @include('admin.carvings.index.grid')
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

   @include('admin.carvings.help')

@endsection
