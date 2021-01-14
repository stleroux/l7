@extends('layouts.UI.app-10')

@section('stylesheet')
	<link rel="stylesheet" href="{{ asset('css/UI/carvings.css') }}">
@endsection

@section('pageHeader')
   <i class="{{ config('icons.carvings') }}"></i>&nbsp;
   {{ ucwords($carving->name) }} Carving Information
@endsection

@section('breadcrumb')
@endsection

@section('rightColumn')
   {{-- @include('carvings.blocks.purchase')   --}}
@endsection

@section('content')

   @include('UI.carvings.show.topbar')

<div class="card card-trans-2 p-2">

   <div class="row">
   
      <div class="col-12 col-xl-5">
         @include('UI.carvings.blocks.imageSlider')
         @include('UI.carvings.show.description')
      </div>
      
      <div class="col-12 col-xl-4">
         @include('UI.carvings.show.materials')
         @include('UI.carvings.show.finishes')
         @include('UI.carvings.show.tags')
      </div>

      <div class="col-12 col-xl-3">
         @include('UI.carvings.show.information')
      </div>
   
   </div>

   <div class="row">
      <div class="col-xl-9">
         @include('common.view_more')         
      </div>
   </div>

   <div class="row">
      <div class="col-xl-9">
         @include('UI.carvings.show.comments', ['model'=>$carving])
      </div>
   
      @auth
         <div class="col-xl-3">
            @include('UI.carvings.show.leave_comment')
         </div>
      @endauth
   </div>

</div>

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
