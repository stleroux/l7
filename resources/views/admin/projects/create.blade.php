@extends('layouts.admin.admin-10-2')

@include('admin.projects.create.sections.stylesheet')
@include('admin.projects.create.sections.pageHeader')
@include('admin.projects.create.sections.breadcrumb')
@include('admin.projects.create.sections.sidebar')
@include('admin.projects.create.sections.functions')
@include('admin.projects.create.sections.formBegin')
@include('admin.projects.create.sections.formEnd')

@section('content')

      {{-- @include('admin.projects.create.topbar') --}}

      <div class="form-row">
         <div class="col-md-6">
            @include('admin.projects.fields.general')
         </div>
         <div class="col-md-6">
            @include('admin.projects.fields.others')
         </div>
      </div>

      <!-- CARD FOOTER -->
      <div class="card-footer pt-1 pb-1 pl-2">
         Fields marked with an <span class="required"></span> are required
      </div>
   
   </form>

   @include('admin.projects.help')

@endsection


@section('scripts')
   <script>
      $(document).ready(function() {
         $("#tags").select2();
      });
   </script>
@endsection
