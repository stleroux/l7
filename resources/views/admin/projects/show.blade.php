@extends('layouts.admin.admin-10-2')

@include('admin.projects.show.sections.stylesheet')
@include('admin.projects.show.sections.pageHeader')
@include('admin.projects.show.sections.breadcrumb')
@include('admin.projects.show.sections.sidebar')
@include('admin.projects.show.sections.blocks')
@include('admin.projects.show.sections.formBegin')
@include('admin.projects.show.sections.formEnd')

@section('content')

   <div class="row">
      <div class="col-12 col-xl-4">@include('admin.projects.blocks.imageSlider')</div>
      
      <div class="col-12 col-xl-8">
         <div class="row">
            <div class="col-12 col-lg-7 p-0 m-0">
               <div class="col-12 col-xl-12">@include('admin.projects.show.fields.description')</div>
               <div class="col-12 col-xl-12">@include('admin.projects.show.fields.materials')</div>
               <div class="col-12 col-xl-12">@include('admin.projects.show.fields.finishes')</div>
               <div class="col-12 col-xl-12">@include('admin.projects.show.fields.tags')</div>

            </div>
            <div class="col-12 col-xl-5">
               <div class="card card-primary">
                  <div class="card-header p-2">
                     {{-- <div class="card-title"> --}}
                     Information
                     {{-- </div> --}}
                  </div>
                  <div class="card-body p-0">
                     @include('admin.projects.show.fields.information')
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

   @include('common.audits')

   @include('admin.projects.help')

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
