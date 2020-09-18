@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ Config::get('icons.add') }}"></i>
   Create Post
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('admin.posts.index') }}">Posts</a></li>
   <li class="breadcrumb-item">Create Post</li>
@endsection

@section('rightSidebar')
@endsection

@section('right_column')
@endsection

@section ('content')

   <form action="{{ route('admin.posts.store', $post) }}" method="POST" enctype="multipart/form-data">
      @csrf

      @include('admin.posts.create.topbar')
         
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
