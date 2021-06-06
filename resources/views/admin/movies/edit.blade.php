@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ config('icons.add') }}"></i>
   Edit Movie :: {{ $movie->title }}
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
   @include('admin.movies.edit.topbar')
@endsection

@section('content')
   
      <div class="card mb-3">
   {{-- {!! Form::model($movie, ['route'=>['admin.movies.update', $movie->id], 'method' => 'PUT', 'files' => true]) !!} --}}
   <form action="{{ route('admin.movies.update', $movie) }}" method="POST" enctype="multipart/formdata">
      @csrf
      @method('PUT')
      
      
      @include('common.form_submission_error')

         
         {{-- <div class="card-header section_header p-2">
            <i class="fa fa-edit"></i>
            Edit Movie
            <div class="float-right">
               <div class="btn-group">
                  @include('admin.movies.buttons.help', ['size'=>'xs', 'bookmark'=>'movies'])
                  @include('admin.movies.buttons.back', ['size'=>'xs'])
                  @include('admin.movies.buttons.update', ['size'=>'xs'])
               </div>
            </div>
         </div> --}}

         <div class="card-body section_body p-2">
            @include('admin.movies.form')
         </div>
   </form>

      </div>

   @include('admin.movies.help')
   {{-- {!! Form::Close() !!} --}}

@endsection