@extends('layouts.admin.admin-10-2')

@include('admin.carvings.index.sections.stylesheet')
@include('admin.carvings.index.sections.pageHeader')
@include('admin.carvings.index.sections.breadcrumb')
@include('admin.carvings.index.sections.sidebar')
@include('admin.carvings.index.sections.blocks')
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

   @include('modals.destroy',       ['modelName'=>'carving'])
   @include('modals.massDestroy',   ['modelName'=>'carving'])
   @include('modals.restore',       ['modelName'=>'carving'])
   @include('modals.massRestore',   ['modelName'=>'carving'])
   @include('modals.delete',        ['modelName'=>'carving'])
   @include('modals.massDelete',    ['modelName'=>'carving'])
   @include('modals.resetViews',    ['modelName'=>'carving'])
   @include('modals.massResetViews',['modelName'=>'carving'])

   @include('admin.carvings.help')

@endsection
