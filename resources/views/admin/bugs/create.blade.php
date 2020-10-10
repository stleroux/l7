@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ Config::get('icons.add') }}"></i>
   Report a Bug
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('admin.bugs.index') }}">Bugs</a></li>
   <li class="breadcrumb-item active">Report</li>
@endsection

@section('rightSidebar')
   {{-- @include('admin.roles.index.sidebar') --}}
@endsection

@section('content')

   <form action="{{ route('admin.bugs.store') }}" method="POST" class="m-0 p-0">
      @csrf

      @include('admin.bugs.create.topbar')

      <div class="row">

         <div class="col">

            <div class="card card-primary">

               <div class="card-header">
                  <div class="card-title">Bug Information</div>
               </div>
               <div class="card-body">
                  <div class="row">
                     <div class="col">
                        @include('admin.bugs.create.title', ['required'=>'required'])
                     </div>
                     <div class="col">
                        @include('admin.bugs.create.page_url')
                     </div>
                     <div class="col-xl-2">
                        @include('admin.bugs.create.status')
                     </div>
                  </div>
                  <div class="row">
                     <div class="col">
                        @include('admin.bugs.create.description', ['required'=>'required'])
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
{{--    <script>
      window.onload = function() {
          document.getElementById("title").focus();
      }
   </script> --}}
@endsection
