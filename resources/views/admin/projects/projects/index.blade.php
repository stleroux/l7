@extends('layouts.admin.admin')

@section('stylesheets')
@endsection

@section('pageHeader')
   <i class="{{ Config::get('icons.projects') }}"></i>
   @if(Route::currentRouteName('') == 'admin.projects.trashed')
      Trashed Projects
   @else
      Projects
   @endif
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item active">Projects</li>
@endsection

@section('rightSidebar')
@endsection

@section('content')

   @include('admin.projects.projects.index.topbar')

   <div class="row">
      <div class="col">
         <div class="card mb-3">
            <!--CARD BODY-->
            <div class="card-body p-3">
               @include('admin.projects.projects.index.grid')
            </div>
         </div>
      </div>
   </div>

   @include('modals.destroy', ['modelName'=>'project'])
   @include('modals.massDestroy', ['modelName'=>'project'])
   {{-- @include('modals.restore', ['modelName'=>'project']) --}}
   @include('modals.massRestore', ['modelName'=>'project'])
   @include('modals.delete', ['modelName'=>'project'])
   @include('modals.massDelete', ['modelName'=>'project'])
   @include('modals.resetViews', ['modelName'=>'project'])
   @include('modals.massResetViews', ['modelName'=>'project'])

   @include('admin.projects.projects.help')

@endsection
