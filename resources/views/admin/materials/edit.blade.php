@extends('layouts.admin.admin-10-2')

@include('admin.materials.edit.sections.stylesheet')
@include('admin.materials.edit.sections.pageHeader')
@include('admin.materials.edit.sections.breadcrumb')
@include('admin.materials.edit.sections.sidebar')
@include('admin.materials.edit.sections.functions')
@include('admin.materials.edit.sections.formBegin')
@include('admin.materials.edit.sections.formEnd')

@section ('content')
   


      {{-- @include('admin.materials.edit.topbar') --}}

      <div class="card mb-2">
         <!-- CARD HEADER -->
         <div class="card-header py-1">
            General Information
            <div class="card-tools">
               <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
            </div>
         </div>
         <!-- CARD BODY -->
         <div class="card-body p-3">
            <div class="form-row">
               @include('admin.materials.fields.name')
               @include('admin.materials.fields.type')
               @include('admin.materials.fields.manufacturer')
               @include('admin.materials.fields.upcCode')
               @include('admin.materials.fields.notes')
            </div>
         </div>
         <!-- CARD FOOTER -->
         <div class="card-footer card_footer p-1">
            Fields marked with an <span class="required"></span> are required
         </div>

      </div>


   @include('admin.materials.help')

@endsection