@extends('layouts.admin')

@section('pageHeader', 'Edit User')

@section('breadcrumbs')
   <li class="breadcrumb-item"><a href="{{ route('admin.categories.index') }}">Categories</a></li>
   <li class="breadcrumb-item active">Edit</li>
@endsection

@section('formStart')
   <form action="{{ route('admin.categories.update', $category) }}" method="POST">
      @csrf
      @method('PUT')
@endsection

@section('formActions')
   @include('admin.categories.edit.topbar')
@endsection

@section('formEnd')
   </form>
@endsection

@section('content')

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

@endsection

@section('scripts')
   <script>
      window.onload = function() {
          document.getElementById("name").focus();
      }
   </script>
@endsection
