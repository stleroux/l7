@extends('layouts.admin.admin-10-2')

@include('admin.blocks.edit.sections.stylesheet')
@include('admin.blocks.edit.sections.pageHeader')
@include('admin.blocks.edit.sections.breadcrumb')
@include('admin.blocks.edit.sections.sidebar')
@include('admin.blocks.edit.sections.blocks')
@include('admin.blocks.edit.sections.formBegin')
@include('admin.blocks.edit.sections.formEnd')

@section('content')

   @include('admin.blocks.forms.form')
   @include('admin.blocks.help')

@endsection

@section('scripts')
   <script>
      window.onload = function() {
          document.getElementById("name").focus();
      }
   </script>
@endsection
