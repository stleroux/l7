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

   <div class="card card-trans-2 p-1">
      <div class="card-body p-2">
         <div class="row">
            <div class="col-9">
               <div class="row">
                  <div class="col-7">
                     @include('UI.carvings.blocks.imageSlider')
                     @include('UI.carvings.show.description')                  
                  </div>
                  <div class="col-5">
                     @include('UI.carvings.show.materials')
                     @include('UI.carvings.show.finishes')
                     @include('UI.carvings.show.tags')                  
                  </div>
               </div>
               <div class="row-col">
                  @include('common.view_more')               
               </div>
               <div class="row-col">
                  @include('UI.carvings.show.comments', ['model'=>$carving])
               </div>
            </div>
            <div class="col-3">
               @include('UI.carvings.show.information')            
               @auth
                  @include('UI.carvings.show.leave_comment')
               @endauth
            </div>
         </div>
      </div>
   </div>

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
