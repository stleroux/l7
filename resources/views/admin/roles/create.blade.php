@extends('layouts.admin.admin-10-2')

@include('admin.roles.create.sections.stylesheet')
@include('admin.roles.create.sections.pageHeader')
@include('admin.roles.create.sections.breadcrumb')
@include('admin.roles.create.sections.sidebar')
@include('admin.roles.create.sections.blocks')
@include('admin.roles.create.sections.formBegin')
@include('admin.roles.create.sections.formEnd')

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
