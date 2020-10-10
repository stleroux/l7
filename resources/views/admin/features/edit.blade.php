@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ Config::get('icons.edit') }}"></i>
   Edit Feature
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('admin.features.index') }}">Features</a></li>
   <li class="breadcrumb-item active">Edit</li>
@endsection

@section('rightSidebar')
   {{-- @include('admin.roles.index.sidebar') --}}
@endsection

@section('content')

   <form action="{{ route('admin.features.update', $feature) }}" method="POST">
      @csrf
      @method('PUT')

      @include('admin.features.edit.topbar')

      <div class="row">

         <div class="col">

            <div class="card card-primary">

               <div class="card-header">
                  <div class="card-title">Feature Information</div>
               </div>
               <div class="card-body">
                  <div class="row">
                     <div class="col">
                        @include('admin.features.edit.title', ['required'=>'required'])
                     </div>
                     <div class="col-xl-2">
                        @include('admin.features.edit.status')
                     </div>
                  </div>
                  <div class="row">
                     <div class="col">
                        @include('admin.features.edit.description', ['required'=>'required'])
                     </div>
                  </div>
                  <div class="row">
                     <div class="col">
                        @include('admin.features.edit.resolution')
                     </div>
                  </div>

               </div> <!-- Card body -->
            </div><!-- Card -->
         </div><!-- Col -->

      </div><!-- Row -->

      @include('admin.features.help')

   </form>

@endsection

@section('scripts')
   <!-- Bootstrap Switch -->
{{--    <script src="{{ asset('plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
   <script>
      $("input[data-bootstrap-switch]").each(function(){
         $(this).bootstrapSwitch('state', $(this).prop('checked'));
      });
   </script> --}}
   <script>
      window.onload = function() {
          document.getElementById("name").focus();
      }
   </script>
@endsection
