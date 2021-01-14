@extends('layouts.UI.app-8')

@section('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@endsection

@section('pageHeader')
      Edit Bug Report
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('bugs.index') }}">Bug Reports</a></li>
   <li class="breadcrumb-item">Edit Bug Report</li>
@endsection

@section('rightColumn')
@endsection

@section('content')

   <form action="{{ route('bugs.update', $bug) }}" method="POST">
      @csrf
      @method('PUT')

      @include('UI.bugs.edit.topbar')

      <div class="row">

         <div class="col">

            <div class="card card-trans-4">

               {{-- <div class="card-header">
                  <div class="card-title">Bug Information</div>
               </div> --}}
               <div class="card-body p-2">
                  <div class="row">
                     <div class="col">
                        @include('UI.bugs.edit.title', ['required'=>'required'])
                     </div>
                     <div class="col">
                        @include('UI.bugs.edit.page_url')
                     </div>
                     {{-- <div class="col-xl-2">
                        @include('UI.bugs.edit.status')
                     </div> --}}
                  </div>
                  <div class="row">
                     <div class="col">
                        @include('UI.bugs.edit.description', ['required'=>'required'])
                     </div>
                  </div>
                  {{-- <div class="row">
                     <div class="col">
                        @include('UI.bugs.edit.resolution')
                     </div>
                  </div> --}}

               </div> <!-- Card body -->
            </div><!-- Card -->
         </div><!-- Col -->

      </div><!-- Row -->

   </form>

   @include('help.index', ['title'=>'Edit Bug Report', 'icon'=>'bugs', 'path'=>'UI.bugs.edit'])

@endsection

@section('scripts')
   <!-- Bootstrap Switch -->
{{--    <script src="{{ asset('plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
   <script>
      $("input[data-bootstrap-switch]").each(function(){
         $(this).bootstrapSwitch('state', $(this).prop('checked'));
      });
   </script> --}}
{{--    <script>
      window.onload = function() {
          document.getElementById("name").focus();
      }
   </script> --}}
@endsection
