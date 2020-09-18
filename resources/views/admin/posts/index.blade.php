@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ Config::get('icons.posts') }}"></i>
   Published Posts
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item">Posts</li>
@endsection

@section('rightSidebar')
@endsection

@section('right_column')
@endsection

@section('content')

	@include('admin.posts.index.topbar')

   <div class="row">
      <div class="col">
         <div class="card mb-3">
            <!--CARD BODY-->
            <div class="card-body p-3">
               @include('admin.posts.index.grid')
            </div>
         </div>
      </div>
   </div>

	@include('modals.destroy', ['modelName'=>'post'])
   @include('modals.restore', ['modelName'=>'post'])
   @include('modals.massDestroy', ['modelName'=>'post'])
   @include('modals.massRestore', ['modelName'=>'post'])
   @include('modals.delete', ['modelName'=>'post'])
   @include('modals.massDelete', ['modelName'=>'post'])
   @include('modals.massPublish', ['modelName'=>'post'])
   @include('modals.massUnpublish', ['modelName'=>'post'])
   @include('modals.unpublish', ['modelName'=>'post'])

   @include('admin.posts.help')

@endsection
