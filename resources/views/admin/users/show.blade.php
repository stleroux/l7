@extends('layouts.admin.admin-10-2')

@include('admin.users.show.sections.stylesheet')
@include('admin.users.show.sections.pageHeader')
@include('admin.users.show.sections.breadcrumb')
@include('admin.users.show.sections.sidebar')
@include('admin.users.show.sections.blocks')
@include('admin.users.show.sections.formBegin')
@include('admin.users.show.sections.formEnd')

@section('content')

   @include('admin.users.forms.form')

   @include('admin.users.show.sections.invoices')
   
   @include('common.audits')

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