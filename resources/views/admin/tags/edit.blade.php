@extends('layouts.admin.admin-10-2')

@include('admin.tags.edit.sections.stylesheet')
@include('admin.tags.edit.sections.pageHeader')
@include('admin.tags.edit.sections.breadcrumb')
@include('admin.tags.edit.sections.sidebar')
@include('admin.tags.edit.sections.blocks')
@include('admin.tags.edit.sections.formBegin')
@include('admin.tags.edit.sections.formEnd')

@section('content')

   @include('admin.tags.forms.form')
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
