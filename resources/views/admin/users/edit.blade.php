@extends('layouts.admin')

@section('pageHeader', 'Edit User')

@section('breadcrumbs')
   <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">Users</a></li>
   <li class="breadcrumb-item active">Edit</li>
@endsection

@section('formStart')
   <form action="{{ route('admin.users.update', $user) }}" method="POST">
      @csrf
      @method('PUT')
@endsection

@section('formActions')
   @include('admin.users.edit.topbar')
@endsection

@section('formEnd')
   </form>
@endsection

@section('content')

   <div class="row">

      <div class="col-9">

         <div class="card card-primary">
            <div class="card-header">
               <div class="card-title">User Information</div>
            </div>
            <div class="card-body">
               
               <div class="row">
                  @include('admin.users.edit.fields.name')
                  @include('admin.users.edit.fields.email')
               </div>

            </div> <!-- Card body -->
         </div><!-- Card -->
      
      </div><!-- Col -->

      <div class="col-3">
         @include('admin.users.edit.fields.roles')         
      </div>

   </div><!-- Row -->

   @include('admin.users.help')

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
