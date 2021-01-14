@extends('layouts.admin.admin-10-2')

@include('admin.finishes.index.sections.stylesheet')
@include('admin.finishes.index.sections.pageHeader')
@include('admin.finishes.index.sections.breadcrumb')
@include('admin.finishes.index.sections.sidebar')
@include('admin.finishes.index.sections.functions')
@include('admin.finishes.index.sections.formBegin')
@include('admin.finishes.index.sections.formEnd')

@section('content')

   {{-- @include('admin.finishes.index.topbar') --}}

   <div class="row">
      <div class="col">
         <div class="card mb-3">
            <!--CARD BODY-->
            <div class="card-body p-3">
               @include('admin.finishes.index.grid')
            </div>
         </div>
      </div>
   </div>
      
   {{-- @include('admin.finishes.index.modals.mass_destroy') --}}
   @include('modals.destroy', ['modelName'=>'finish'])
   @include('modals.massDestroy', ['modelName'=>'finish'])

   @include('modals.restore', ['modelName'=>'finish'])
   @include('modals.massRestore', ['modelName'=>'finish'])

   @include('modals.delete', ['modelName'=>'finish'])
   @include('modals.massDelete', ['modelName'=>'finish'])
   
   @include('admin.finishes.help')

@endsection
