@extends('layouts.admin.admin-10-2')

@include('admin.roles.edit.sections.stylesheet')
@include('admin.roles.edit.sections.pageHeader')
@include('admin.roles.edit.sections.breadcrumb')
@include('admin.roles.edit.sections.sidebar')
@include('admin.roles.edit.sections.blocks')
@include('admin.roles.edit.sections.formBegin')
@include('admin.roles.edit.sections.formEnd')

@section('content')

   @include('admin.roles.forms.form')
   @include('admin.roles.help')

@endsection

@section('scripts')
   <script>
      window.onload = function() {
          document.getElementById("name").focus();
      }
   </script>
@endsection
