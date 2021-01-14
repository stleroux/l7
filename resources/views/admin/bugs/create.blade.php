@extends('layouts.admin.admin-10-2')

@include('admin.bugs.create.sections.stylesheet')
@include('admin.bugs.create.sections.pageHeader')
@include('admin.bugs.create.sections.breadcrumb')
@include('admin.bugs.create.sections.sidebar')
@include('admin.bugs.create.sections.functions')
@include('admin.bugs.create.sections.formBegin')
@include('admin.bugs.create.sections.formEnd')

@section('content')

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

@endsection
