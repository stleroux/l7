@extends('layouts.admin.admin-10-2')

@include('admin.recipes.create.sections.stylesheet')
@include('admin.recipes.create.sections.pageHeader')
@include('admin.recipes.create.sections.breadcrumb')
@include('admin.recipes.create.sections.sidebar')
@include('admin.recipes.create.sections.functions')
@include('admin.recipes.create.sections.formBegin')
@include('admin.recipes.create.sections.formEnd')

@section ('content')

   {{-- {!! Form::open(['route' => 'admin.recipes.store', 'files'=>'true']) !!} --}}


      {{-- @include('admin.recipes.create.topbar') --}}
         
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
