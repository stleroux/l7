@extends('layouts.admin.admin-10-2')

@include('admin.posts.create.sections.stylesheet')
@include('admin.posts.create.sections.pageHeader')
@include('admin.posts.create.sections.breadcrumb')
@include('admin.posts.create.sections.sidebar')
@include('admin.posts.create.sections.functions')
@include('admin.posts.create.sections.formBegin')
@include('admin.posts.create.sections.formEnd')

@section ('content')



      {{-- @include('admin.posts.create.topbar') --}}
         
      <div class="card card-primary card-outline card-outline-tabs">
         
         <div class="card-header p-0 border-bottom-0">
            @include('admin.posts.create.tabs')
         </div>

         <div class="card-body">
            <div class="tab-content" id="recipe-tabContent">
               @include('admin.posts.create.general')
               @include('admin.posts.create.notes')
               @include('admin.posts.create.image')
               @include('admin.posts.create.information')
               @include('admin.posts.create.settings')
            </div>
         </div>
         <!-- /.card -->
      </div>

   </form>

   @include('admin.posts.help')
   
@endsection

@section('scripts')
   <script>
      $(document).ready(function() {
         $("#tags").select2();
      });
   </script>
@endsection
