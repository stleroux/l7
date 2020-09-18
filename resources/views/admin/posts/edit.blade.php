@extends('layouts.admin.admin')

@section('stylesheet')
   {{-- <link rel="stylesheet" href="/css/bootstrap-select.css"> --}}
@endsection

@section('pageHeader')
   <i class="{{ Config::get('icons.posts') }}"></i>
   Edit Post :: {{ ucwords($post->title) }}
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('admin.posts.index') }}">Posts</a></li>
   <li class="breadcrumb-item">Edit Post</li>
@endsection

@section('rightSidebar')
@endsection

@section('right_column')
@endsection

@section ('content')

   <form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')

      @include('admin.posts.edit.topbar')
         
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