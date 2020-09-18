@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ Config::get('icons.edit') }}"></i>
   Edit Permission
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('admin.permissions.index') }}">Permisisons</a></li>
   <li class="breadcrumb-item active">Edit</li>
@endsection

@section('rightSidebar')
   {{-- @include('admin.roles.index.sidebar') --}}
@endsection

@section('content')

   <form action="{{ route('admin.permissions.update', $permission) }}" method="POST">
      @csrf
      @method('PUT')

      @include('admin.permissions.edit.topbar')

      <div class="row">

         <div class="col">

            <div class="card card-primary">
               <div class="card-header">
                  <div class="card-title">Permission Information</div>
               </div>
               <div class="card-body">

                  <div class="row">
                     @include('admin.permissions.fields.name')
                     @include('admin.permissions.fields.description')
                  </div>

               </div> <!-- Card body -->
            </div><!-- Card -->
         
         </div><!-- Col -->

      </div><!-- Row -->

      @include('admin.permissions.help')
      
   </form>

@endsection

@section('scripts')
   <script>
      window.onload = function() {
          document.getElementById("name").focus();
      }
   </script>
@endsection
