@extends('layouts.admin.admin-10-2')

@include('admin.categories.edit.sections.stylesheet')
@include('admin.categories.edit.sections.pageHeader')
@include('admin.categories.edit.sections.breadcrumb')
@include('admin.categories.edit.sections.sidebar')
@include('admin.categories.edit.sections.blocks')
@include('admin.categories.edit.sections.formBegin')
@include('admin.categories.edit.sections.formEnd')

@section('content')

   @include('common.form_submission_error')

   <div class="card card-primary">

      <div class="card-header p-2">
         <div class="card-title">Category Information</div>
      
      </div>
      <div class="card-body">
         
         <div class="row">
            <div class="col-xl-3">
               @include('admin.categories.edit.fields.name', ['required'=>'required'])                        
            </div>
            <div class="col-xl-9">
               @include('admin.categories.edit.fields.description')                        
            </div>
         </div> <!-- Row -->

      </div> <!-- Card body -->
   </div><!-- Card -->
         
   @include('admin.categories.help')

@endsection
