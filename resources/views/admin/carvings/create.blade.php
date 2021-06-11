@extends('layouts.admin.admin-10-2')

@include('admin.carvings.create.sections.stylesheet')
@include('admin.carvings.create.sections.pageHeader')
@include('admin.carvings.create.sections.breadcrumb')
@include('admin.carvings.create.sections.sidebar')
@include('admin.carvings.create.sections.blocks')
@include('admin.carvings.create.sections.formBegin')
@include('admin.carvings.create.sections.formEnd')

@section('content')

   @include('admin.carvings.forms.form')

   @include('admin.carvings.help')

@endsection

@section('scripts')
   <script>
      $(document).ready(function() {
         $("#tags").select2({
            tags : true,
         });
      });
   </script>
@endsection
