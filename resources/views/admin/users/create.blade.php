@extends('layouts.admin.admin-10-2')

@include('admin.users.create.sections.stylesheet')
@include('admin.users.create.sections.pageHeader')
@include('admin.users.create.sections.breadcrumb')
@include('admin.users.create.sections.sidebar')
@include('admin.users.create.sections.blocks')
@include('admin.users.create.sections.formBegin')
@include('admin.users.create.sections.formEnd')

@section('content')

   @include('admin.users.forms.form')
   @include('admin.users.help')

@endsection

@section('scripts')
   <!-- Bootstrap Switch -->
   <script src="{{ asset('plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
   <script>
      $("input[data-bootstrap-switch]").each(function(){
         $(this).bootstrapSwitch('state', $(this).prop('checked'));
      });
   </script>
@endsection
