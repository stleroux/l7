@extends('layouts.admin.admin-10-2')

@include('admin.posts.create.sections.stylesheet')
@include('admin.posts.create.sections.pageHeader')
@include('admin.posts.create.sections.breadcrumb')
@include('admin.posts.create.sections.sidebar')
@include('admin.posts.create.sections.blocks')
@include('admin.posts.create.sections.formBegin')
@include('admin.posts.create.sections.formEnd')

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
