@extends('layouts.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   Create User
@endsection

@section('breadcrumbs')
   <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">Users</a></li>
   <li class="breadcrumb-item active">Create</li>
@endsection

@section('rightSidebar')
   {{-- @include('admin.roles.index.sidebar') --}}
@endsection

@section('content')

   <form action="{{ route('admin.users.store') }}" method="POST" class="m-0 p-0">
      @csrf

      @include('admin.users.create.topbar')

      <div class="row">

         <div class="col-9">

            <div class="card card-primary">

               <div class="card-header">
                  <div class="card-title">User Information</div>
               </div>
               <div class="card-body">
                  
                  <div class="row">
                     @include('admin.users.create.fields.name')
                     @include('admin.users.create.fields.email')
                  </div>

               </div> <!-- Card body -->
            </div><!-- Card -->
         
         </div><!-- Col -->

         <div class="col-3">
            @include('admin.users.create.fields.roles')
            
         </div>

      </div><!-- Row -->

      @include('admin.users.help')

   </form>

@endsection

@section('scripts')
   <!-- Bootstrap Switch -->
   <script src="{{ asset('plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
   <script>
      $("input[data-bootstrap-switch]").each(function(){
         $(this).bootstrapSwitch('state', $(this).prop('checked'));
      });
   </script>

   <script>
      window.onload = function() {
          document.getElementById("name").focus();
      }
   </script>
@endsection
