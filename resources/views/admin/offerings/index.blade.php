@extends('layouts.admin.admin-10-2')

@include('admin.offerings.index.sections.stylesheet')
@include('admin.offerings.index.sections.pageHeader')
@include('admin.offerings.index.sections.breadcrumb')
@include('admin.offerings.index.sections.sidebar')
@include('admin.offerings.index.sections.blocks')
@include('admin.offerings.index.sections.formBegin')
@include('admin.offerings.index.sections.formEnd')

@section('content')

   <div class="row">
      <div class="col">
         <div class="card mb-3">
            <!--CARD BODY-->
            <div class="card-body p-3">
               @include('admin.offerings.index.grid')
            </div>
         </div>
      </div>
   </div>

   @include('modals.destroy',       ['modelName'=>'offering'])
   @include('modals.massDestroy',   ['modelName'=>'offering'])
   @include('modals.restore',       ['modelName'=>'offering'])
   @include('modals.massRestore',   ['modelName'=>'offering'])
   @include('modals.delete',        ['modelName'=>'offering'])
   @include('modals.massDelete',    ['modelName'=>'offering'])
   {{-- @include('modals.resetViews',    ['modelName'=>'offering']) --}}
   {{-- @include('modals.massResetViews',['modelName'=>'offering']) --}}
   {{-- @include('modals.publish',       ['modelName'=>'offering']) --}}
   {{-- @include('modals.massPublish',   ['modelName'=>'offering']) --}}
   {{-- @include('modals.unpublish',     ['modelName'=>'offering']) --}}
   {{-- @include('modals.massUnpublish', ['modelName'=>'offering']) --}}

   @include('admin.offerings.help')

@endsection
