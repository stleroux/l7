@extends('layouts.admin.admin-10-2')

@include('admin.carvings.show.sections.stylesheet')
@include('admin.carvings.show.sections.pageHeader')
@include('admin.carvings.show.sections.breadcrumb')
@include('admin.carvings.show.sections.sidebar')
@include('admin.carvings.show.sections.blocks')
@include('admin.carvings.show.sections.formBegin')
@include('admin.carvings.show.sections.formEnd')

@section('content')

   <div class="row">
      <div class="col-12 col-xl-4">@include('admin.carvings.blocks.imageSlider')</div>
      
      <div class="col-12 col-xl-8">
         <div class="row">
            <div class="col-12 col-lg-7 p-0 m-0">
               <div class="col-12 col-xl-12">@include('admin.carvings.show.fields.description')</div>
               <div class="col-12 col-xl-12">@include('admin.carvings.show.fields.materials')</div>
               <div class="col-12 col-xl-12">@include('admin.carvings.show.fields.finishes')</div>
               <div class="col-12 col-xl-12">@include('admin.carvings.show.fields.tags')</div>
            </div>
            <div class="col-12 col-xl-5">
               @include('admin.carvings.show.fields.information')
            </div>
         </div>
      </div>
      
   </div>

   <div class="row">
      <div class="col">
         @include('common.comments', ['model'=>$carving])
      </div>
   </div>

   @include('admin.carvings.help')

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
