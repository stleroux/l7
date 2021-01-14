@extends('layouts.admin.admin-10-2')

@include('admin.projects.projects.show.sections.stylesheet')
@include('admin.projects.projects.show.sections.pageHeader')
@include('admin.projects.projects.show.sections.breadcrumb')
@include('admin.projects.projects.show.sections.sidebar')
@include('admin.projects.projects.show.sections.functions')
@include('admin.projects.projects.show.sections.formBegin')
@include('admin.projects.projects.show.sections.formEnd')

@section('content')

   <div class="row">
      <div class="col-12 col-xl-4">@include('admin.projects.blocks.imageSlider')</div>
      
      <div class="col-12 col-xl-8">
         <div class="row">
            <div class="col-12 col-lg-7 p-0 m-0">
               <div class="col-12 col-xl-12">@include('admin.projects.projects.show.description')</div>
               <div class="col-12 col-xl-12">@include('admin.projects.projects.show.materials')</div>
               <div class="col-12 col-xl-12">@include('admin.projects.projects.show.finishes')</div>
            </div>
            <div class="col-12 col-xl-5">
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
