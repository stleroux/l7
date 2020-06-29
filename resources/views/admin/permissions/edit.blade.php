@extends('layouts.admin')

@section('pageHeader', 'Edit Permission')

@section('breadcrumbs')
   <li class="breadcrumb-item"><a href="{{ route('admin.permissions.index') }}">Permisisons</a></li>
   <li class="breadcrumb-item active">Edit</li>
@endsection

@section('formStart')
   <form action="{{ route('admin.permissions.update', $permission) }}" method="POST">
      @csrf
      @method('PUT')
@endsection

@section('formActions')
   @include('admin.permissions.edit.topbar')
@endsection

@section('formEnd')
   </form>
@endsection

@section('content')

   <div class="row">

      <div class="col">

         <div class="card card-primary">
            <div class="card-header">
               <div class="card-title">Permission Information</div>
            </div>
            <div class="card-body">

               <div class="row">
                  @include('admin.permissions.edit.fields.name')
                  @include('admin.permissions.edit.fields.description')
               </div>

            </div> <!-- Card body -->
         </div><!-- Card -->
      
      </div><!-- Col -->

   </div><!-- Row -->

   @include('admin.permissions.help')

@endsection

@section('scripts')
   <script>
      window.onload = function() {
          document.getElementById("name").focus();
      }
   </script>
@endsection
