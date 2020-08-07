@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ Config::get('icons.edit') }}"></i>
   Edit User
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">Users</a></li>
   <li class="breadcrumb-item active">Edit</li>
@endsection

@section('rightSidebar')
   {{-- @include('admin.roles.index.sidebar') --}}
@endsection

@section('content')

   <form action="{{ route('admin.users.update', $user) }}" method="POST">
      @csrf
      @method('PUT')

      @include('admin.users.edit.topbar')

      {{-- <div class="row justify-content-center">
         <div class="col-12 col-xl-1">
            @include('admin.users.form.fields.approved')
         </div>
      </div> --}}

      <div class="row">
         <div class="col-xl-6">
            @include('admin.users.form.account')
            @include('admin.users.form.user')
            @include('admin.users.form.contact')
            @include('admin.users.form.address')
         </div>

         <div class="col-xl-3">
            @include('admin.users.form.image')
            @include('admin.users.form.other')
         </div>

         <div class="col-xl-3">
            @include('admin.users.form.fields.roles')
            @include('admin.users.form.password')
            {{-- @include('admin.users.form.login') --}}
         </div>

      </div>

      @include('admin.users.help')

   </form>

@endsection

{{-- @section('scripts') --}}
   <!-- Bootstrap Switch -->
{{--    <script src="{{ asset('plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
   <script>
      $("input[data-bootstrap-switch]").each(function(){
         $(this).bootstrapSwitch('state', $(this).prop('checked'));
      });
   </script> --}}
   
{{--    <script>
      window.onload = function() {
          document.getElementById("first_name").focus();
      }
   </script> --}}
{{-- @endsection --}}
