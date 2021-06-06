@extends('layouts.admin.admin-10-2')

@include('admin.permissions.edit.sections.stylesheet')
@include('admin.permissions.edit.sections.pageHeader')
@include('admin.permissions.edit.sections.breadcrumb')
@include('admin.permissions.edit.sections.sidebar')
@include('admin.permissions.edit.sections.blocks')
@include('admin.permissions.edit.sections.formBegin')
@include('admin.permissions.edit.sections.formEnd')

@section('content')

   <div class="row">

      <div class="col">

         @include('common.form_submission_error')

         <div class="card card-primary">
            <div class="card-header p-2">
               <div class="card-title">Permission Information</div>
            </div>
            <div class="card-body">

               <div class="row">
                  @include('admin.permissions.forms.fields.name')
                  @include('admin.permissions.forms.fields.description')
               </div>

            </div> <!-- Card body -->
         </div><!-- Card -->
      
      </div><!-- Col -->

   </div><!-- Row -->

   @include('admin.permissions.help')

@endsection
