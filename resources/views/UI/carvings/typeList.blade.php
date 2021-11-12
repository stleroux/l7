@extends('layouts.UI.app-10')

@section('stylesheet')
	<link rel="stylesheet" href="{{ asset('css/UI/carvings.css') }}">
@endsection

@section('pageHeader')
   <i class="{{ config('icons.carvings') }}"></i>&nbsp;
   Carving Types List
@endsection

@section('breadcrumb')
@endsection

@section('rightColumn')
   {{-- @include('carvings.blocks.purchase')   --}}
@endsection

@section('content')

   {{-- @include('UI.carvings.show.topbar') --}}



   <div class="card card-trans-2 p-1">
      <div class="card-header">
         Carving Type Offerings<br />
         <small>This list is not exhaustive</small>
      </div>
      <div class="card-body p-2">
         <table class="table table-sm table-hover">
            <thead>
               <tr>
                  <th>Trays</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>Utensil</td>
               </tr>
               <tr>
                  <td>Drill Bit</td>
               </tr>
               <tr>
                  <td>Catch All</td>
               </tr>
            </tbody>
            <thead>
               <tr>
                  <th>Plaques</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>Wedding Announcements</td>
               </tr>
               <tr>
                  <td>Commemorative</td>
               </tr>
               <tr>
                  <td>Graduation</td>
               </tr>
               <tr>
                  <td>Achievements</td>
               </tr>
            </tbody>
         </table>
      </div>
   </div>






   <div class="card card-trans-2 p-1">
      <div class="card-body p-2">
         <div class="row" style="font-size: 14pt;">
            {!! $list->answer !!}
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
