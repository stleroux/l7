@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ config('icons.add') }}"></i>
   Create Movie
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('admin.movies.index') }}">Movies</a></li>
   <li class="breadcrumb-item active">Create</li>
@endsection

@section('rightSidebar')
@endsection

@section('rightColumn')
   {{-- @include('admin.movies.blocks.sidebar') --}}
   @include('admin.movies.blocks.archives')
@endsection

@section('topbar')
   @include('admin.movies.create.topbar')
@endsection

@section('content')

{{-- <div class="card bg-info">
   <div class="card-header">Header</div>
   <div class="card-body">Body</div>
   <div class="card-footer">Footer</div>
</div> --}}



      <div class="card mb-3">

   <form action="{{ route('admin.movies.store') }}" method="POST" enctype="multipart/form-data">
      @csrf

   
      @include('common.form_submission_error')


         <div class="card-body section_body p-2">
            @include('admin.movies.form')            
         </div>

   
   </form>
      </div>

   @include('admin.movies.help')

@endsection
