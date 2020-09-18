@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ Config::get('icons.edit') }}"></i>
   Edit Recipe :: {{ ucwords($recipe->title) }}
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('admin.recipes.index') }}">Recipes</a></li>
   <li class="breadcrumb-item">Edit Recipe</li>
@endsection

@section('rightSidebar')
@endsection

@section('right_column')
@endsection

@section ('content')

   <form action="{{ route('admin.recipes.update', $recipe) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')

      @include('admin.recipes.edit.topbar')
         
      <div class="card card-primary card-outline card-outline-tabs">
         
         <div class="card-header p-0 border-bottom-0">
            @include('admin.recipes.edit.tabs')
         </div>

         <div class="card-body">
            <div class="tab-content" id="recipe-tabContent">
               @include('admin.recipes.edit.general')
               @include('admin.recipes.edit.notes')
               @include('admin.recipes.edit.image')
               @include('admin.recipes.edit.information')
               @include('admin.recipes.edit.settings')
            </div>
         </div>
         <!-- /.card -->
      </div>

   </form>

   @include('admin.recipes.help')
   
@endsection
