@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ Config::get('icons.add') }}"></i>
   Create Material
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('admin.projects.materials.index') }}">Projects</a></li>
   <li class="breadcrumb-item active">Create</li>
@endsection

@section('rightSidebar')
@endsection

@section ('content')
   
   <form action="{{ route('admin.projects.materials.store') }}" method="POST" class="m-0 p-0">
      @csrf

      @include('admin.projects.materials.create.topbar')

      <div class="card mb-2">
         <!-- CARD HEADER -->
         <div class="card-header py-1">
            General Information
            <div class="card-tools">
               <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
            </div>
         </div>
         <!-- CARD BODY -->
         <div class="card-body p-3">
            <div class="form-row">
               @include('admin.projects.materials.fields.name')
               @include('admin.projects.materials.fields.type')
               @include('admin.projects.materials.fields.manufacturer')
               @include('admin.projects.materials.fields.upcCode')
               @include('admin.projects.materials.fields.notes')
            </div>
         </div>
         <!-- CARD FOOTER -->
         <div class="card-footer card_footer p-1">
            Fields marked with an <span class="required"></span> are required
         </div>

      </div>

   </form>

   @include('admin.projects.materials.help')

@endsection
