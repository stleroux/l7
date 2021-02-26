@extends('layouts.admin.admin-10-2')

@include('admin.faqs.show.sections.stylesheet')
@include('admin.faqs.show.sections.pageHeader')
@include('admin.faqs.show.sections.breadcrumb')
@include('admin.faqs.show.sections.sidebar')
@include('admin.faqs.show.sections.blocks')
@include('admin.faqs.show.sections.formBegin')
@include('admin.faqs.show.sections.formEnd')

@section('content')

   <div class="form-row">
      <div class="col-12">
         @include('admin.faqs.forms.form')
      </div>
   </div>

   {{-- <div class="row">
      <div class="col-12 col-xl-12">@include('admin.faqs.show.question')</div>
      <div class="col-12 col-xl-12">@include('admin.faqs.show.answer')</div> --}}
      {{-- <div class="col-12 col-xl-4">@include('admin.faqs.blocks.imageSlider')</div> --}}
      
      {{-- <div class="col-12 col-xl-8">
         <div class="row">
            <div class="col-12 col-lg-7 p-0 m-0">
               <div class="col-12 col-xl-12">@include('admin.faqs.show.materials')</div>
               <div class="col-12 col-xl-12">@include('admin.faqs.show.finishes')</div>
               <div class="col-12 col-xl-12">@include('admin.faqs.show.tags')</div>
            </div>
            <div class="col-12 col-xl-5">
               @include('admin.faqs.show.information')
            </div>
         </div>
      </div> --}}
      
   {{-- </div> --}}

   <div class="row">
      <div class="col">
         @include('common.comments', ['model'=>$faq])
      </div>
   </div>

   @include('common.audits')

   @include('admin.faqs.help')

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
