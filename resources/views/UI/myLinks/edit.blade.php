@extends('layouts.UI.app-8')

@section('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@endsection

@section('pageHeader')
      Edit Link
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('mylinks.index') }}">My Links</a></li>
   <li class="breadcrumb-item">Edit Link</li>
@endsection

@section('rightColumn')
@endsection

@section('content')

   <form action="{{ route('mylinks.update', $mylink) }}" method="POST">
      @csrf
      @method('PUT')

      @include('UI.myLinks.edit.topbar')

      <div class="row">

         <div class="col">

            <div class="card card-trans-4">

               <div class="card-header section_header">
                  <div class="card-title">Link Information</div>
               </div>

               @include('common.form_submission_error')

               <div class="card-body p-2">
                  <div class="row">
                     <div class="col">
                        @include('UI.myLinks.edit.name', ['required'=>'required'])
                     </div>
                     <div class="col">
                        @include('UI.myLinks.edit.page_url', ['required'=>'required'])
                     </div>
                  </div>
               </div> <!-- Card body -->
            </div><!-- Card -->
         </div><!-- Col -->

      </div><!-- Row -->

   </form>

   @include('help.index', ['title'=>'Edit Link', 'icon'=>'', 'path'=>'UI.myLinks.edit'])

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
