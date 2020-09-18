@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ Config::get('icons.add') }}"></i>
   Create Recipe
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('admin.recipes.index') }}">Recipes</a></li>
   <li class="breadcrumb-item">Create Recipe</li>
@endsection

@section('rightSidebar')
@endsection

@section('right_column')
@endsection

@section ('content')

   {{-- {!! Form::open(['route' => 'admin.recipes.store', 'files'=>'true']) !!} --}}
   <form action="{{ route('admin.recipes.store', $recipe) }}" method="POST" enctype="multipart/form-data">
      @csrf

      @include('admin.recipes.create.topbar')
         
      <div class="card card-primary card-outline card-outline-tabs">
         
         <div class="card-header p-0 border-bottom-0">
            @include('admin.recipes.create.tabs')
         </div>

         <div class="card-body">
            <div class="tab-content" id="recipe-tabContent">
               @include('admin.recipes.create.general')
               @include('admin.recipes.create.notes')
               @include('admin.recipes.create.image')
               @include('admin.recipes.create.information')
               @include('admin.recipes.create.settings')
            </div>
         </div>
         <!-- /.card -->
      </div>

   </form>

   @include('admin.recipes.help')
   
@endsection
