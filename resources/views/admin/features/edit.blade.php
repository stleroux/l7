@extends('layouts.admin.admin-10-2')

@include('admin.features.edit.sections.stylesheet')
@include('admin.features.edit.sections.pageHeader')
@include('admin.features.edit.sections.breadcrumb')
@include('admin.features.edit.sections.sidebar')
@include('admin.features.edit.sections.blocks')
@include('admin.features.edit.sections.formBegin')
@include('admin.features.edit.sections.formEnd')

@section('content')

   @include('admin.features.forms.form')
   @include('admin.features.help')
   
@endsection

@section('scripts')
   <script>
      window.onload = function() {
          document.getElementById("name").focus();
      }
   </script>
@endsection
