@extends('layouts.admin.admin-10-2')

@include('admin.offerings.show.sections.stylesheet')
@include('admin.offerings.show.sections.pageHeader')
@include('admin.offerings.show.sections.breadcrumb')
@include('admin.offerings.show.sections.sidebar')
@include('admin.offerings.show.sections.blocks')
@include('admin.offerings.show.sections.formBegin')
@include('admin.offerings.show.sections.formEnd')

@section('content')

   <div class="form-row">
      <div class="col-12">
         @include('admin.offerings.forms.form')
      </div>
   </div>

   {{-- <div class="row">
      <div class="col-12 col-xl-12">@include('admin.offerings.show.question')</div>
      <div class="col-12 col-xl-12">@include('admin.offerings.show.answer')</div> --}}
      {{-- <div class="col-12 col-xl-4">@include('admin.offerings.blocks.imageSlider')</div> --}}
      
      {{-- <div class="col-12 col-xl-8">
         <div class="row">
            <div class="col-12 col-lg-7 p-0 m-0">
               <div class="col-12 col-xl-12">@include('admin.offerings.show.materials')</div>
               <div class="col-12 col-xl-12">@include('admin.offerings.show.finishes')</div>
               <div class="col-12 col-xl-12">@include('admin.offerings.show.tags')</div>
            </div>
            <div class="col-12 col-xl-5">
               @include('admin.offerings.show.information')
            </div>
         </div>
      </div> --}}
      
   {{-- </div> --}}

   <div class="row">
      <div class="col">
         @include('admin.offerings.show.comments', ['model'=>$faq])
      </div>
   </div>

   @include('common.audits')

   @include('admin.offerings.help')

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
