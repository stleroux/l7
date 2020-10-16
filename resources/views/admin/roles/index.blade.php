@extends('layouts.admin.admin-10-2')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ Config::get('icons.roles') }}"></i>
   @if(Route::currentRouteName('') == 'admin.roles.trashed')
      Trashed Roles
   @elseif(Route::currentRouteName('') == 'admin.roles.noPermissions')
      Roles without Permissions
   @else
      Roles
   @endif
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item active">Roles</li>
@endsection

@section('rightSidebar')
   @include('admin.roles.index.sidebar')
@endsection

@section('rightColumn')
   @include('admin.roles.index.rightColumn')   
@endsection

@section('content')

   {{-- @include('admin.roles.index.topbar') --}}

   <div class="card mb-3">
      <div class="card-body p-3">
         @include('admin.roles.index.grid')
      </div>
   </div>
      
   @include('modals.destroy', ['modelName'=>'role'])
   @include('modals.massDestroy', ['modelName'=>'role'])
   @include('modals.massRestore', ['modelName'=>'role'])
   @include('modals.delete', ['modelName'=>'role'])
   @include('modals.massDelete', ['modelName'=>'role'])
   @include('admin.roles.help')

@endsection
