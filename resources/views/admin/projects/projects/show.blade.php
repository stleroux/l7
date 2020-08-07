@extends('layouts.admin.admin')

@section('stylesheet')
	{{-- {{ Html::style('css/woodbarn.css') }} --}}
@endsection

@section('pageHeader')
   <i class="{{ Config::get('icons.projects') }}"></i>
   {{ ucwords($project->name) }} Project Information
@endsection

@section('breadcrumb')
@endsection

@section('rightSidebar')
   {{-- @include('projects.blocks.leave_comment') --}}
   {{-- @include('projects.blocks.purchase')   --}}
@endsection

@section('content')

   @include('admin.projects.projects.show.topbar')

   <div class="row">
      <div class="col-12 col-xl-6">@include('admin.projects.blocks.imageSlider')</div>
      
      <div class="col-12 col-xl-6">
         <div class="row">
            <div class="col-12 col-lg-6 p-0 m-0">
               <div class="col-12 col-xl-12">@include('admin.projects.projects.show.description')</div>
               <div class="col-12 col-xl-12">@include('admin.projects.projects.show.materials')</div>
               <div class="col-12 col-xl-12">@include('admin.projects.projects.show.finishes')</div>
            </div>
            <div class="col-12 col-xl-6">
               <div class="card card-outline card-primary">
                  <div class="card-header">
                     <div class="card-title">Information</div>
                  </div>
                  <div class="card-body p-0">
                     @include('admin.projects.projects.show.information')
                  </div>
               </div>
            </div>
         </div>
      </div>
      
   </div>

   <div class="row">
      <div class="col">
         @include('common.comments', ['model'=>$project])
      </div>
   </div>

   @include('admin.projects.projects.help')

@endsection

@section('scripts')
   <script>
      $('.modal').on('shown.bs.modal', function (e) {
         $('.carousel').carousel('pause');
   })
   </script>
   <script>
      $('.modal').on('hide.bs.modal',function (e) {
         $('.carousel').carousel('cycle');
      })
   </script>
@endsection
