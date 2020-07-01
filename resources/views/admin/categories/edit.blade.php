@extends('layouts.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   Edit User
@endsection

@section('breadcrumbs')
   <li class="breadcrumb-item"><a href="{{ route('admin.categories.index') }}">Categories</a></li>
   <li class="breadcrumb-item active">Edit</li>
@endsection

@section('rightSidebar')
   {{-- @include('admin.roles.index.sidebar') --}}
@endsection

@section('content')

   <form action="{{ route('admin.categories.update', $category) }}" method="POST">
      @csrf
      @method('PUT')

      @include('admin.categories.edit.topbar')

      <div class="row">

         <div class="col-9">

            <div class="card card-primary">
               <div class="card-header">
                  <div class="card-title">Category Information</div>
               </div>
               <div class="card-body">
                  
                  <div class="row">
                     @include('admin.categories.edit.fields.name')
                     @include('admin.categories.edit.fields.description')
                  </div> <!-- Row -->

               </div> <!-- Card body -->
            </div><!-- Card -->
         
         </div><!-- Col -->

      </div><!-- Row -->

      @include('admin.categories.help')
      
   </form>

@endsection

@section('scripts')
   <script>
      window.onload = function() {
          document.getElementById("name").focus();
      }
   </script>
@endsection
