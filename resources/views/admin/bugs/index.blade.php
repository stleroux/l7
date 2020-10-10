@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ Config::get('icons.bugs') }}"></i>
   @if(Route::currentRouteName('') == 'admin.bugs.new')
      Newly Reported Bugs
   @elseif(Route::currentRouteName('') == 'admin.bugs.pending')
      Pending Bugs
   @elseif(Route::currentRouteName('') == 'admin.bugs.notreproducible')
      Not Reproducible
   @elseif(Route::currentRouteName('') == 'admin.bugs.nonissue')
      Non Issue
   @elseif(Route::currentRouteName('') == 'admin.bugs.resolved')
      Resolved
   @elseif(Route::currentRouteName('') == 'admin.bugs.trashed')
      Trashed Bugs
   @else
      Bugs
   @endif
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item active">Bugs</li>
@endsection

@section('rightSidebar')
   {{-- @include('admin.bugs.index.sidebar') --}}
@endsection

@section('content')

   @include('admin.bugs.index.topbar')

   <div class="card mb-3">
      <div class="card-body p-3">
         @include('admin.bugs.index.grid')
      </div>
   </div>
      
   @include('modals.destroy', ['modelName'=>'bug'])
   @include('modals.massDestroy', ['modelName'=>'bug'])
   @include('modals.massRestore', ['modelName'=>'bug'])
   @include('modals.delete', ['modelName'=>'bug'])
   @include('modals.massDelete', ['modelName'=>'bug'])
   @include('admin.bugs.help')

@endsection