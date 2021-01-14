@extends('layouts.admin.admin-10-2')

@include('admin.permissions.edit.sections.stylesheet')
@include('admin.permissions.edit.sections.pageHeader')
@include('admin.permissions.edit.sections.breadcrumb')
@include('admin.permissions.edit.sections.sidebar')
@include('admin.permissions.edit.sections.functions')
@include('admin.permissions.edit.sections.formBegin')
@include('admin.permissions.edit.sections.formEnd')

@section('content')

   <div class="row">

      <div class="col">

         <div class="card card-primary">
            <div class="card-header">
               <div class="card-title">Permission Information</div>
            </div>
            <div class="card-body">

               <div class="row">
                  @include('admin.permissions.fields.name')
                  @include('admin.permissions.fields.description')
               </div>

            </div> <!-- Card body -->
         </div><!-- Card -->
      
      </div><!-- Col -->

   </div><!-- Row -->

   @include('admin.permissions.help')

@endsection
