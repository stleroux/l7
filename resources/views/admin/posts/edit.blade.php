@extends('layouts.admin.admin-10-2')

@include('admin.posts.edit.sections.stylesheet')
@include('admin.posts.edit.sections.pageHeader')
@include('admin.posts.edit.sections.breadcrumb')
@include('admin.posts.edit.sections.sidebar')
@include('admin.posts.edit.sections.blocks')
@include('admin.posts.edit.sections.formBegin')
@include('admin.posts.edit.sections.formEnd')

@section ('content')

   @include('admin.posts.forms.form')
   @include('admin.posts.help')
   
@endsection

@section('scripts')
   <script>
      $(document).ready(function() {
         $("#tags").select2();
      });
   </script>
@endsection
