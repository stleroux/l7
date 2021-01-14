@extends('layouts.admin.admin-10-2')

@include('admin.finishes.edit.sections.stylesheet')
@include('admin.finishes.edit.sections.pageHeader')
@include('admin.finishes.edit.sections.breadcrumb')
@include('admin.finishes.edit.sections.sidebar')
@include('admin.finishes.edit.sections.functions')
@include('admin.finishes.edit.sections.formBegin')
@include('admin.finishes.edit.sections.formEnd')

@section ('content')
   


      {{-- @include('admin.finishes.edit.topbar') --}}

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
               @include('admin.finishes.fields.name')
               @include('admin.finishes.fields.colorName')
               @include('admin.finishes.fields.colorCode')
               @include('admin.finishes.fields.sheen')
               @include('admin.finishes.fields.type')
               @include('admin.finishes.fields.manufacturer')
               @include('admin.finishes.fields.upcCode')
               @include('admin.finishes.fields.notes')
            </div>
         </div>
         <!-- CARD FOOTER -->
         <div class="card-footer card_footer p-1">
            Fields marked with an <span class="required"></span> are required
         </div>

      </div>

   @include('admin.finishes.help')

@endsection