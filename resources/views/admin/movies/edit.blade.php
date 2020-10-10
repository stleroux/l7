@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ Config::get('icons.add') }}"></i>
   Edit Movie :: {{ $movie->title }}
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
   
   {{-- {!! Form::model($movie, ['route'=>['admin.movies.update', $movie->id], 'method' => 'PUT', 'files' => true]) !!} --}}
   <form action="{{ route('admin.movies.update', $movie) }}" method="POST" enctype="multipart/formdata">
      @csrf
      @method('PUT')
      
      @include('admin.movies.edit.topbar')

      <div class="card mb-3">
         
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

      </div>

   {{-- {!! Form::Close() !!} --}}

@endsection