@extends('layouts.UI.app-10')

@section('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/projects.css') }}">
@endsection

@section('pageHeader')
   <i class="{{ config('icons.projects') }}"></i>
   {{ ucwords($project->name) }} Project Information
@endsection

@section('breadcrumb')
@endsection

@section('rightColumn')
   {{-- @include('projects.blocks.purchase')   --}}
@endsection

@section('content')

   @include('UI.projects.show.topbar')

   <div class="card card-trans-2 p-1">
      <div class="card-body p-2">
         <div class="row">
            <div class="col-9">
               <div class="row">
                  <div class="col-7">
                     @include('UI.projects.blocks.imageSlider')
                     @include('UI.projects.show.description')                  
                  </div>
                  <div class="col-5">
                     @include('UI.projects.show.materials')
                     @include('UI.projects.show.finishes')
                     @include('UI.projects.show.tags')                  
                  </div>
               </div>
               <div class="row-col">
                  @include('UI.projects.blocks.view_more')
               </div>
               <div class="row-col">
                  @include('UI.projects.show.comments', ['model'=>$project])
               </div>
            </div>
            <div class="col-3">
               @include('UI.projects.show.information')            
               @include('UI.projects.show.leave_comment')
            </div>
         </div>
      </div>
   </div>

@endsection
