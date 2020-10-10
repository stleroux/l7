@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ Config::get('icons.edit') }}"></i>
   Edit Bug
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('admin.bugs.index') }}">Bugs</a></li>
   <li class="breadcrumb-item active">Edit</li>
@endsection

@section('rightSidebar')
   {{-- @include('admin.roles.index.sidebar') --}}
@endsection

@section('content')

   <form action="{{ route('admin.bugs.update', $bug) }}" method="POST">
      @csrf
      @method('PUT')

      @include('admin.bugs.edit.topbar')

      <div class="row">

         <div class="col">

            <div class="card card-primary">

               <div class="card-header">
                  <div class="card-title">Bug Information</div>
               </div>
               <div class="card-body">
                  <div class="row">
                     <div class="col">
                        @include('admin.bugs.edit.title', ['required'=>'required'])
                     </div>
                     <div class="col">
                        @include('admin.bugs.edit.page_url')
                     </div>
                     <div class="col-xl-2">
                        @include('admin.bugs.edit.status')
                     </div>
                  </div>
                  <div class="row">
                     <div class="col">
                        @include('admin.bugs.edit.description', ['required'=>'required'])
                     </div>
                  </div>
                  <div class="row">
                     <div class="col">
                        @include('admin.bugs.edit.resolution')
                     </div>
                  </div>

               </div> <!-- Card body -->
            </div><!-- Card -->
         </div><!-- Col -->

      </div><!-- Row -->

      @include('admin.bugs.help')

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
