@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ Config::get('icons.materials') }}"></i>
   @if(Route::currentRouteName('') == 'admin.projects.materials.trashed')
      Trashed Project Materials
   @else
      Project Materials
   @endif
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('admin.projects.index') }}">Projects</a></li>
   <li class="breadcrumb-item active">Project Materials</li>
@endsection

@section('rightSidebar')
@endsection

@section('content')

   @include('admin.projects.materials.index.topbar')

   <div class="row">
      <div class="col">
         <div class="card mb-3">
            <!--CARD BODY-->
            <div class="card-body p-3">
               @include('admin.projects.materials.index.grid')
            </div>
         </div>
      </div>
   </div>
      
   {{-- @include('admin.projects.finishes.index.modals.mass_destroy') --}}
   @include('modals.destroy', ['modelName'=>'material'])
   @include('modals.massDestroy', ['modelName'=>'material'])

   @include('modals.massRestore', ['modelName'=>'material'])
   @include('modals.delete', ['modelName'=>'material'])
   @include('modals.massDelete', ['modelName'=>'material'])
   
   @include('admin.projects.materials.help')

@endsection
