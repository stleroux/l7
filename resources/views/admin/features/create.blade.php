@extends('layouts.admin.admin-10-2')

@include('admin.features.create.sections.stylesheet')
@include('admin.features.create.sections.pageHeader')
@include('admin.features.create.sections.breadcrumb')
@include('admin.features.create.sections.sidebar')
@include('admin.features.create.sections.functions')
@include('admin.features.create.sections.formBegin')
@include('admin.features.create.sections.formEnd')

@section('content')

      {{-- @include('admin.features.create.topbar') --}}

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
