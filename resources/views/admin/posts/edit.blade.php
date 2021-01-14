@extends('layouts.admin.admin-10-2')

@include('admin.posts.edit.sections.stylesheet')
@include('admin.posts.edit.sections.pageHeader')
@include('admin.posts.edit.sections.breadcrumb')
@include('admin.posts.edit.sections.sidebar')
@include('admin.posts.edit.sections.functions')
@include('admin.posts.edit.sections.formBegin')
@include('admin.posts.edit.sections.formEnd')

@section ('content')



      {{-- @include('admin.posts.edit.topbar') --}}
         
      <div class="card card-primary card-outline card-outline-tabs">
         
         <div class="card-header p-0 border-bottom-0">
            @include('admin.posts.edit.tabs')
         </div>

         <div class="card-body">
            <div class="tab-content" id="recipe-tabContent">
               @include('admin.posts.edit.general')
               @include('admin.posts.edit.notes')
               @include('admin.posts.edit.image')
               @include('admin.posts.edit.information')
               @include('admin.posts.edit.settings')
            </div>
         </div>
         <!-- /.card -->
      </div>

   </form>

   @include('admin.posts.help')
   
@endsection

{{-- @section ('scripts') --}}
   {{-- <script type="text/javascript" src="/js/bootstrap-select.js"></script> --}}
{{-- @endsection --}}

@section('scripts')
   <script>
      $(document).ready(function() {
         $("#tags").select2();
      });
   </script>
@endsection