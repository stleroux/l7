@extends('layouts.admin.admin-10-2')

@include('admin.tags.create.sections.stylesheet')
@include('admin.tags.create.sections.pageHeader')
@include('admin.tags.create.sections.breadcrumb')
@include('admin.tags.create.sections.sidebar')
@include('admin.tags.create.sections.functions')
@include('admin.tags.create.sections.formBegin')
@include('admin.tags.create.sections.formEnd')

@section('content')


      {{-- @include('admin.tags.create.topbar') --}}

      {{-- <div class="row">

         <div class="col-md-3"> --}}

            <div class="card card-primary">

               <div class="card-header">
                  <div class="card-title">Tag Information</div>
               </div>
               <div class="card-body">
                  <div class="row">
                     @include('admin.tags.fields.name')
                     @include('admin.tags.fields.category')
                  </div>

               </div> <!-- Card body -->
            </div><!-- Card -->
         {{-- </div><!-- Col -->

         <div class="col-md-9">
            
         </div>

      </div><!-- Row --> --}}

      @include('admin.tags.help')


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
