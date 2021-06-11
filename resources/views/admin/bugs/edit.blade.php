@extends('layouts.admin.admin-10-2')

@include('admin.bugs.edit.sections.stylesheet')
@include('admin.bugs.edit.sections.pageHeader')
@include('admin.bugs.edit.sections.breadcrumb')
@include('admin.bugs.edit.sections.sidebar')
@include('admin.bugs.edit.sections.blocks')
@include('admin.bugs.edit.sections.formBegin')
@include('admin.bugs.edit.sections.formEnd')

@section('content')

   @include('admin.bugs.forms.form')
   @include('admin.bugs.help')

@endsection

@section('scripts')
   <script>
      window.onload = function() {
          document.getElementById("name").focus();
      }
   </script>
@endsection
