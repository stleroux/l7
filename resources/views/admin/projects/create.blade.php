@extends('layouts.admin.admin-10-2')

@include('admin.projects.create.sections.stylesheet')
@include('admin.projects.create.sections.pageHeader')
@include('admin.projects.create.sections.breadcrumb')
@include('admin.projects.create.sections.sidebar')
@include('admin.projects.create.sections.blocks')
@include('admin.projects.create.sections.formBegin')
@include('admin.projects.create.sections.formEnd')

@section('content')

   @include('admin.projects.forms.form')
   @include('admin.projects.help')

@endsection

@section('scripts')
   <script>
      $(document).ready(function() {
         $("#tags").select2();
      });
   </script>
@endsection
