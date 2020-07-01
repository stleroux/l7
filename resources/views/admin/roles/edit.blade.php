@extends('layouts.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   Edit Role
@endsection

@section('breadcrumbs')
   <li class="breadcrumb-item"><a href="{{ route('admin.roles.index') }}">Roles</a></li>
   <li class="breadcrumb-item active">Edit</li>
@endsection

@section('rightSidebar')
   {{-- @include('admin.roles.index.sidebar') --}}
@endsection

@section('content')

   <form action="{{ route('admin.roles.update', $role) }}" method="POST">
      @csrf
      @method('PUT')

      @include('admin.roles.edit.topbar')

      <div class="row">

         <div class="col-md-3">

            <div class="card card-primary">
               <div class="card-header">
                  <div class="card-title">Role Information</div>
               </div>
               <div class="card-body">
                  <div class="row">
                     @include('admin.roles.edit.fields.name')
                     @include('admin.roles.edit.fields.description')
                  </div>

               </div> <!-- Card body -->
            </div><!-- Card -->
         
         </div><!-- Col -->


         <div class="col-md-9">
            @include('admin.roles.edit.fields.permissions')
         </div>

      </div><!-- Row -->

      @include('admin.roles.help')

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
