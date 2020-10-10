@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ Config::get('icons.features') }}"></i>
   @if(Route::currentRouteName('') == 'admin.features.new')
      Newly Reported Features
   @elseif(Route::currentRouteName('') == 'admin.features.underreview')
      Under Review Features
   @elseif(Route::currentRouteName('') == 'admin.features.pending')
      Pending Features
   @elseif(Route::currentRouteName('') == 'admin.features.implemented')
      Implemented Features
   @elseif(Route::currentRouteName('') == 'admin.features.rejected')
      Rejected Features
   @elseif(Route::currentRouteName('') == 'admin.features.trashed')
      Trashed Features
   @else
      Features
   @endif
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item active">Features</li>
@endsection

@section('rightSidebar')
   {{-- @include('admin.features.index.sidebar') --}}
@endsection

@section('content')

   @include('admin.features.index.topbar')

   <div class="card mb-3">
      <div class="card-body p-3">
         @include('admin.features.index.grid')
      </div>
   </div>
      
   @include('modals.destroy', ['modelName'=>'feature'])
   @include('modals.massDestroy', ['modelName'=>'feature'])
   @include('modals.massRestore', ['modelName'=>'feature'])
   @include('modals.delete', ['modelName'=>'feature'])
   @include('modals.massDelete', ['modelName'=>'feature'])
   @include('admin.features.help')

@endsection