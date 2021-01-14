@extends('layouts.admin.admin-10-2')

@include('admin.tags.edit.sections.stylesheet')
@include('admin.tags.edit.sections.pageHeader')
@include('admin.tags.edit.sections.breadcrumb')
@include('admin.tags.edit.sections.sidebar')
@include('admin.tags.edit.sections.functions')
@include('admin.tags.edit.sections.formBegin')
@include('admin.tags.edit.sections.formEnd')

@section('content')



      {{-- @include('admin.tags.edit.topbar') --}}



            <div class="card card-primary">
               <div class="card-header">
                  <div class="card-title">Tag Information</div>
               </div>
               <div class="card-body">
                  <div class="row">
                     @include('admin.tags.fields.name')
                     @include('admin.tags.fields.category')
                  </div>

               </div> <!-- Card body -->
            </div><!-- Card -->
         
      @include('admin.tags.help')


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
