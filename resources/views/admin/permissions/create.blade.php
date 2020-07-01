@extends('layouts.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   Create Permission
@endsection

@section('breadcrumbs')
   <li class="breadcrumb-item"><a href="{{ route('admin.permissions.index') }}">Permissions</a></li>
   <li class="breadcrumb-item active">Create</li>
@endsection

@section('rightSidebar')
   {{-- @include('admin.roles.index.sidebar') --}}
@endsection

@section('content')

   <form action="{{ route('admin.permissions.store') }}" method="POST" class="m-0 p-0">
      @csrf

      @include('admin.permissions.create.topbar')

      <div class="row">

         <div class="col">

            <div class="card card-primary">

               <div class="card-header">
                  <div class="card-title">Permission Information</div>
               </div>
               
               <div class="card-body">

                  <div class="row">
                     @include('admin.permissions.create.fields.name')
                     @include('admin.permissions.create.fields.description')
                  </div>

               </div> <!-- Card body -->
            </div><!-- Card -->
         
         </div><!-- Col -->
      </div><!-- Row -->

      @include('admin.permissions.help')

   </form>

@endsection

@section('scripts')
   <!-- Bootstrap Switch -->
   {{-- <script src="{{ asset('plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
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
