@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ Config::get('icons.add') }}"></i>
   Create Movie
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('admin.movies.index') }}">Movies</a></li>
   <li class="breadcrumb-item active">Create</li>
@endsection

@section('rightSidebar')
@endsection

@section('right_column')
   {{-- @include('admin.movies.blocks.sidebar') --}}
   @include('admin.movies.blocks.archives')
@endsection

@section('topbar')
@endsection

@section('content')

   <form action="{{ route('admin.movies.store') }}" method="POST" enctype="multipart/form-data">
      @csrf

      @include('admin.movies.create.topbar')
   
      <div class="card mb-3">

         <div class="card-body section_body p-2">
            @include('admin.movies.form')            
         </div>

      </div>
   
   </form>

   @include('admin.movies.help')

@endsection
