@extends('layouts.admin.admin-10-2')

@include('admin.faqs.edit.sections.stylesheet')
@include('admin.faqs.edit.sections.pageHeader')
@include('admin.faqs.edit.sections.breadcrumb')
@include('admin.faqs.edit.sections.sidebar')
@include('admin.faqs.edit.sections.blocks')
@include('admin.faqs.edit.sections.formBegin')
@include('admin.faqs.edit.sections.formEnd')

@section ('content')

   <div class="form-row">
      <div class="col-12">
         @include('admin.faqs.forms.form')
      </div>
   </div>

   <div class="card-footer pt-1 pb-1 pl-2">
      Fields marked with an <span class="required"></span> are required
   </div>

   @include('admin.faqs.help')

@endsection
