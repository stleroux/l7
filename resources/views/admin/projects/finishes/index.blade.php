@extends('layouts.admin.admin')

@section('stylesheets')
@endsection

@section('pageHeader')
   <i class="{{ Config::get('icons.finishes') }}"></i>
   @if(Route::currentRouteName('') == 'admin.projects.finishes.trashed')
      Trashed Project Finishes
   @else
      Project Finishes
   @endif
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('admin.projects.index') }}">Projects</a></li>
   <li class="breadcrumb-item active">Project Finishes</li>
@endsection

@section('rightSidebar')
@endsection

@section('content')

   @include('admin.projects.finishes.index.topbar')

   <div class="row">
      <div class="col">
         <div class="card mb-3">
            <!--CARD BODY-->
            <div class="card-body p-3">
               @include('admin.projects.finishes.index.grid')
            </div>
         </div>
      </div>
   </div>
      
   {{-- @include('admin.projects.finishes.index.modals.mass_destroy') --}}
   @include('modals.destroy', ['modelName'=>'finish'])
   @include('modals.massDestroy', ['modelName'=>'finish'])

   @include('modals.massRestore', ['modelName'=>'finish'])
   @include('modals.delete', ['modelName'=>'finish'])
   @include('modals.massDelete', ['modelName'=>'finish'])
   
   @include('admin.projects.finishes.help')

@endsection
