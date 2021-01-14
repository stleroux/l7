@extends('layouts.admin.admin-10-2')

@include('admin.bugs.edit.sections.stylesheet')
@include('admin.bugs.edit.sections.pageHeader')
@include('admin.bugs.edit.sections.breadcrumb')
@include('admin.bugs.edit.sections.sidebar')
@include('admin.bugs.edit.sections.functions')
@include('admin.bugs.edit.sections.formBegin')
@include('admin.bugs.edit.sections.formEnd')

@section('content')

   <div class="card card-primary">

      <div class="card-header">
         <div class="card-title">Bug Information</div>
      </div>
      <div class="card-body">
         <div class="row">
            <div class="col">
               @include('admin.bugs.edit.title', ['required'=>'required'])
            </div>
            <div class="col">
               @include('admin.bugs.edit.page_url')
            </div>
            <div class="col-xl-2">
               @include('admin.bugs.edit.status')
            </div>
         </div>
         <div class="row">
            <div class="col">
               @include('admin.bugs.edit.description', ['required'=>'required'])
            </div>
         </div>
         <div class="row">
            <div class="col">
               @include('admin.bugs.edit.resolution')
            </div>
         </div>

      </div> <!-- Card body -->
   </div><!-- Card -->
         
      @include('admin.bugs.help')

@endsection

@section('scripts')
   <!-- Bootstrap Switch -->
{{--    <script src="{{ asset('plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
   <script>
      $("input[data-bootstrap-switch]").each(function(){
         $(this).bootstrapSwitch('state', $(this).prop('checked'));
      });
   </script> --}}
   <script>
      window.onload = function() {
          document.getElementById("name").focus();
      }
   </script>
@endsection
