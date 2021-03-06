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
                  @include('common.view_more')               
               </div>
               <div class="row-col">
                  @include('UI.projects.show.comments', ['model'=>$project])
               </div>
            </div>
            <div class="col-3">
               @include('UI.projects.show.information')            
               @auth
                  @include('UI.projects.show.leave_comment')
               @endauth
            </div>
         </div>
      </div>
   </div>
{{-- <div class="card card-trans-2 p-2">

   <div class="row">
   
      <div class="col-12 col-xl-5">
         @include('UI.projects.blocks.imageSlider')
         @include('UI.projects.show.description')
      </div>
      
      <div class="col-12 col-xl-4">
         @include('UI.projects.show.materials')
         @include('UI.projects.show.finishes')
         @include('UI.projects.show.tags')
      </div>

      <div class="col-12 col-xl-3">
         @include('UI.projects.show.information')
      </div>
   
   </div>

   <div class="row">
      <div class="col-xl-9">
         @include('common.view_more')         
      </div>
   </div>

   <div class="row">
      <div class="col-xl-9">
         @include('UI.projects.show.comments', ['model'=>$project])
      </div>
   
      @auth
         <div class="col-xl-3">
            @include('UI.projects.show.leave_comment')
         </div>
      @endauth
   </div>

</div> --}}

@endsection

{{-- @section('scripts')
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
@endsection --}}
