@extends('layouts.admin.admin-10-2')

@include('admin.blocks.index.sections.stylesheet')
@include('admin.blocks.index.sections.pageHeader')
@include('admin.blocks.index.sections.breadcrumb')
@include('admin.blocks.index.sections.sidebar')
@include('admin.blocks.index.sections.blocks')
@include('admin.blocks.index.sections.formBegin')
@include('admin.blocks.index.sections.formEnd')

@section('content')

   {{-- @include('admin.frontend.index.topbar') --}}

   <div class="card mb-3">
      <div class="card-body p-3">
         @include('admin.blocks.index.grid')
      </div>
   </div>
      
   {{-- @include('modals.destroy',    ['modelName'=>'frontend']) --}}
   {{-- @include('modals.massDestroy',['modelName'=>'frontend']) --}}
   {{-- @include('modals.restore',    ['modelName'=>'frontend']) --}}
   {{-- @include('modals.massRestore',['modelName'=>'frontend']) --}}
   {{-- @include('modals.delete',     ['modelName'=>'frontend']) --}}
   {{-- @include('modals.massDelete', ['modelName'=>'frontend']) --}}
   @include('admin.blocks.help')

@endsection