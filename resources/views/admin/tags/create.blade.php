@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ Config::get('icons.add') }}"></i>
   Create Tag
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('admin.tags.index') }}">Tags</a></li>
   <li class="breadcrumb-item active">Create</li>
@endsection

@section('rightSidebar')
   {{-- @include('admin.roles.index.sidebar') --}}
@endsection

@section('content')
   <form action="{{ route('admin.tags.store') }}" method="POST" class="m-0 p-0">
      @csrf

      @include('admin.tags.create.topbar')

      <div class="row">

         <div class="col-md-3">

            <div class="card card-primary">

               <div class="card-header">
                  <div class="card-title">Tag Information</div>
               </div>
               <div class="card-body">
                  <div class="row">
                     @include('admin.tags.fields.name')
                  </div>

               </div> <!-- Card body -->
            </div><!-- Card -->
         </div><!-- Col -->

         <div class="col-md-9">
            
         </div>

      </div><!-- Row -->

      @include('admin.tags.help')

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
