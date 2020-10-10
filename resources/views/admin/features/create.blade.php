@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ Config::get('icons.add') }}"></i>
   Request a New Feature
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('admin.features.index') }}">Features</a></li>
   <li class="breadcrumb-item active">Request</li>
@endsection

@section('rightSidebar')
   {{-- @include('admin.roles.index.sidebar') --}}
@endsection

@section('content')

   <form action="{{ route('admin.features.store') }}" method="POST" class="m-0 p-0">
      @csrf

      @include('admin.features.create.topbar')

      <div class="row">

         <div class="col">

            <div class="card card-primary">

               <div class="card-header">
                  <div class="card-title">Feature Information</div>
               </div>
               <div class="card-body">
                  <div class="row">
                     <div class="col">
                        @include('admin.features.create.title', ['required'=>'required'])
                     </div>
                     <div class="col-xl-2">
                        @include('admin.features.create.status')
                     </div>
                  </div>
                  <div class="row">
                     <div class="col">
                        @include('admin.features.create.description', ['required'=>'required'])
                     </div>
                  </div>

               </div> <!-- Card body -->
            </div><!-- Card -->
         </div><!-- Col -->

      </div><!-- Row -->

      @include('admin.features.help')

   </form>

@endsection

@section('scripts')
{{--    <script>
      window.onload = function() {
          document.getElementById("title").focus();
      }
   </script> --}}
@endsection
