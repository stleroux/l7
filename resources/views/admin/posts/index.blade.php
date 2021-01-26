@extends('layouts.admin.admin-10-2')

@include('admin.posts.index.sections.stylesheet')
@include('admin.posts.index.sections.pageHeader')
@include('admin.posts.index.sections.breadcrumb')
@include('admin.posts.index.sections.sidebar')
@include('admin.posts.index.sections.blocks')
@include('admin.posts.index.sections.formBegin')
@include('admin.posts.index.sections.formEnd')

@section('content')

	{{-- @include('admin.posts.index.topbar') --}}

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

	@include('modals.destroy',       ['modelName'=>'post'])
   @include('modals.massDestroy',   ['modelName'=>'post'])
   @include('modals.restore',       ['modelName'=>'post'])
   @include('modals.massRestore',   ['modelName'=>'post'])
   @include('modals.delete',        ['modelName'=>'post'])
   @include('modals.massDelete',    ['modelName'=>'post'])
   @include('modals.publish',       ['modelName'=>'post'])
   @include('modals.massPublish',   ['modelName'=>'post'])
   @include('modals.unpublish',     ['modelName'=>'post'])
   @include('modals.massUnpublish', ['modelName'=>'post'])
   @include('modals.resetViews',    ['modelName'=>'post'])
   @include('modals.massResetViews',['modelName'=>'post'])
   @include('admin.posts.help')

@endsection
