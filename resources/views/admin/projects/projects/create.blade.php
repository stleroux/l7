@extends('layouts.admin.admin')

@section('stylesheet')
   <link rel="stylesheet" href="/css/jquery.datetimepicker.min.css">
@endsection

@section('pageHeader')
   <i class="{{ Config::get('icons.add') }}"></i>
   Create Project
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('admin.projects.index') }}">Projects</a></li>
   <li class="breadcrumb-item active">Create</li>
@endsection

@section('rightSidebar')
@endsection

@section('content')
   
   <form action="{{ route('admin.projects.store') }}" method="POST" class="m-0 p-0">
      @csrf

      @include('admin.projects.projects.create.topbar')

      <div class="form-row">
         <div class="col-md-6">
            @include('admin.projects.projects.fields.general')
         </div>
         <div class="col-md-6">
            @include('admin.projects.projects.fields.others')
         </div>
      </div>

      <!-- CARD FOOTER -->
      <div class="card-footer pt-1 pb-1 pl-2">
         Fields marked with an <span class="required"></span> are required
      </div>

   
   </form>

   @include('admin.projects..projects.help')

@endsection








@section('scripts')
   <script type="text/javascript" src="/js/jquery.datetimepicker.full.min.js"></script>

   <script>
      $("#datePicker").datetimepicker({
         step: 30,
         showOn: 'button',
         buttonImage: '',
         buttonImageOnly: true,
         format:'Y-m-d H:i'+':00'
      });
   </script>

   {{-- <script>
      // Add the following code if you want the name of the file appear on select
      $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
      });
   </script> --}}
@endsection
