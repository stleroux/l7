@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ Config::get('icons.users') }}"></i>
   @if(Route::currentRouteName('') == 'admin.users.trashed')
      Trashed Users
   @elseif(Route::currentRouteName('') == 'admin.users.noRoles')
      Users Without Roles
   @else
      Users
   @endif
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item active">Users</li>
@endsection

@section('rightSidebar')
   @include('admin.users.index.sidebar')
@endsection

@section('content')

   @include('admin.users.index.topbar')

   <div class="card card-trans mb-3">
      <div class="card-body p-3">
          @include('admin.users.index.grid')
      </div>
   </div>

   @include('modals.destroy', ['modelName'=>'user'])
   @include('modals.massDestroy', ['modelName'=>'user'])
   @include('modals.massRestore', ['modelName'=>'user'])
   @include('modals.delete', ['modelName'=>'user'])
   @include('modals.massDelete', ['modelName'=>'user'])
   @include('admin.users.help')

@endsection
