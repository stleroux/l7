@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ Config::get('icons.tags') }}"></i>
   @if(Route::currentRouteName('') == 'admin.tags.trashed')
      Trashed
   @endif
   Tags
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item active"><a href="{{ route('admin.posts.index') }}">Posts</a></li>
   <li class="breadcrumb-item active">Tags</li>
@endsection

@section('rightSidebar')
   @include('admin.tags.index.sidebar')
@endsection

@section('content')

   @include('admin.tags.index.topbar')

   <div class="card mb-3">
      <div class="card-body p-3">
         @include('admin.tags.index.grid')
      </div>
   </div>
      
   @include('modals.destroy', ['modelName'=>'tag'])
   @include('modals.massDestroy', ['modelName'=>'tag'])
   @include('modals.massRestore', ['modelName'=>'tag'])
   @include('modals.delete', ['modelName'=>'tag'])
   @include('modals.massDelete', ['modelName'=>'tag'])
   @include('admin.tags.help')

@endsection
