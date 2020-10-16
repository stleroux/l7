@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ Config::get('icons.posts') }}"></i>
     Future Posts
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('admin.posts.index') }}">Posts</a></li>
   <li class="breadcrumb-item">Future Posts</li>
@endsection

@section('rightSidebar')
@endsection

@section('rightColumn')
@endsection

@section('content')

	@include('admin.posts.pages.future.topbar')

   <div class="row">
      <div class="col">
         <div class="card mb-3">
            <!--CARD BODY-->
            <div class="card-body p-3">
               @include('admin.posts.pages.future.grid')
            </div>
         </div>
      </div>
   </div>


	@include('modals.destroy', ['modelName'=>'post'])
   @include('modals.massDestroy', ['modelName'=>'post'])
   	{{-- @include('modals.restore', ['modelName'=>'post']) --}}
   @include('modals.massRestore', ['modelName'=>'post'])
   @include('modals.delete', ['modelName'=>'post'])
   @include('modals.massDelete', ['modelName'=>'post'])
   @include('modals.massPublish', ['modelName'=>'post'])
   @include('modals.massUnpublish', ['modelName'=>'post'])
   @include('admin.posts.help')

@endsection