@extends('layouts.admin.admin')

@section('stylesheet')
   <link rel="stylesheet" href="/css/jquery.datetimepicker.min.css">
@endsection

@section('pageHeader')
   <i class="{{ Config::get('icons.edit') }}"></i>
   Edit {{ $project->name }} Project
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('admin.projects.index') }}">Projects</a></li>
   <li class="breadcrumb-item active">Edit</li>
@endsection

@section('rightSidebar')
@endsection

@section ('content')

   <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data" class="m-0 p-0">
      @method('PUT')
      @csrf
      
      @include('admin.projects.projects.edit.topbar')
                  
      <div class="form-row">
         <div class="col-md-6">
            @include('admin.projects.projects.fields.general')
         </div>
         <div class="col-md-6">
            @include('admin.projects.projects.fields.others')
         </div>
      </div>
   </form>
                  
   <div class="form-row">
      <div class="col-md-4">
         @include('admin.projects.projects.fields.materials.materials')
      </div>
      <div class="col-md-4">
         @include('admin.projects.projects.fields.finishes.finishes')
      </div>
      <div class="col-md-4">
         @include('admin.projects.projects.fields.images.images')
      </div>
   </div>

   <div class="card-footer pt-1 pb-1 pl-2">
      Fields marked with an <span class="required"></span> are required
   </div>

   @include('admin.projects.projects.help')

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

   <script>
      $(document).ready(function(){
         $("div#showAddMaterial").click(function(){
            $("div#addMaterial").toggle();
            $("i#icon", this).toggleClass("fas fa-caret-up fas fa-sort-down");
         });
         $('div#showAddMaterial').css('cursor', 'pointer');
      });
   </script>

   <script>
      $(document).ready(function(){
         $("div#showAddFinish").click(function(){
            $("div#addFinish").toggle();
            $("i#icon", this).toggleClass("fas fa-caret-up fas fa-sort-down");
         });
         $('div#showAddFinish').css('cursor', 'pointer');
      });
   </script>

   <script>
      $(document).ready(function(){
         $("div#showAddImage").click(function(){
            $("div#addImage").toggle();
            $("i#icon", this).toggleClass("fas fa-caret-up fas fa-sort-down");
         });
         $('div#showAddImage').css('cursor', 'pointer');
      });
   </script>

   <script>
      $(".openmodal").click(function(){
         var href = $(this).data("href");
         var name = $(this).data('name');
         var description = $(this).data('description');
         $("#imagemodal img").attr("src",href);
         $(".modal-header #title").text(name);
         $(".modal-body #description").text(description);
         $("#imagemodal").modal("show");
      });
   </script>



   <script>
      $(document).ready(function(){
         $("div#showEditImage").click(function(){
            $("div#editImage").toggle();
            $("i#icon", this).toggleClass("fas fa-caret-up fas fa-sort-down");
         });
         $('div#showEditImage').css('cursor', 'pointer');
      });
   </script>


@endsection
