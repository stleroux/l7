@extends('layouts.admin.admin-10-2')

@include('admin.materials.index.sections.stylesheet')
@include('admin.materials.index.sections.pageHeader')
@include('admin.materials.index.sections.breadcrumb')
@include('admin.materials.index.sections.sidebar')
@include('admin.materials.index.sections.blocks')
@include('admin.materials.index.sections.formBegin')
@include('admin.materials.index.sections.formEnd')

@section('content')

   {{-- @include('admin.materials.index.topbar') --}}

   <div class="row">
      <div class="col">
         <div class="card mb-3">
            <!--CARD BODY-->
            <div class="card-body p-3">
               @include('admin.materials.index.grid')
            </div>
         </div>
      </div>
   </div>
      
   {{-- @include('admin.finishes.index.modals.mass_destroy') --}}
   @include('modals.destroy',       ['modelName'=>'material'])
   @include('modals.massDestroy',   ['modelName'=>'material'])
   @include('modals.restore',       ['modelName'=>'material'])
   @include('modals.massRestore',   ['modelName'=>'material'])
   @include('modals.delete',        ['modelName'=>'material'])
   @include('modals.massDelete',    ['modelName'=>'material'])
   @include('admin.materials.help')

@endsection
