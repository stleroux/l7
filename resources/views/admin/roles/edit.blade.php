@extends('layouts.admin.admin-10-2')

@include('admin.roles.edit.sections.stylesheet')
@include('admin.roles.edit.sections.pageHeader')
@include('admin.roles.edit.sections.breadcrumb')
@include('admin.roles.edit.sections.sidebar')
@include('admin.roles.edit.sections.functions')
@include('admin.roles.edit.sections.formBegin')
@include('admin.roles.edit.sections.formEnd')

@section('content')

   <div class="row">

      <div class="col-md-3">

         <div class="card card-primary">
            <div class="card-header">
               <div class="card-title">Role Information</div>
            </div>
            <div class="card-body">
               <div class="row">
                  @include('admin.roles.fields.name')
                  @include('admin.roles.fields.description')
               </div>

            </div> <!-- Card body -->
         </div><!-- Card -->
      
      </div><!-- Col -->


      <div class="col-md-9">
         @include('admin.roles.fields.permissions')
      </div>

   </div><!-- Row -->

   @include('admin.roles.help')


@endsection

@section('scripts')
   <script>
      window.onload = function() {
          document.getElementById("name").focus();
      }
   </script>
@endsection
