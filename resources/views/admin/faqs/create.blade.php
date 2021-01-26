@extends('layouts.admin.admin-10-2')

@include('admin.faqs.create.sections.stylesheet')
@include('admin.faqs.create.sections.pageHeader')
@include('admin.faqs.create.sections.breadcrumb')
@include('admin.faqs.create.sections.sidebar')
@include('admin.faqs.create.sections.blocks')
@include('admin.faqs.create.sections.formBegin')
@include('admin.faqs.create.sections.formEnd')

@section('content')

   <div class="form-row">
      <div class="col-12">
         @include('admin.faqs.forms.form')
      </div>
   </div>

   <!-- CARD FOOTER -->
   <div class="card-footer pt-1 pb-1 pl-2">
      Fields marked with an <span class="required"></span> are required
   </div>

   @include('admin.faqs.help')

@endsection
