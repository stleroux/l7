@extends('layouts.admin')

@section('stylesheet')
   <link rel="stylesheet" href="/css/jquery.datetimepicker.min.css">
@endsection

@section('pageHeader')
   <i class="fa fa-edit"></i> Edit {{ $project->name }} Project
@endsection

@section('rightSidebar')
@endsection

@section ('content')

   <form action="{{ route('admin.projects.update', $project->id) }}" enctype="multipart/form-data">
      @method('PUT')
      @csrf
      
      @include('admin.projects.edit.topbar')
                  
      <div class="form-row">
         <div class="col-md-6">
            @include('admin.projects.edit.general.general')
         </div>
         <div class="col-md-6">
            @include('admin.projects.edit.others.others')
         </div>
      </div>
   </form>
                  
   <div class="form-row">
      <div class="col-md-4">
         @include('admin.projects.edit.materials.materials')
      </div>
      <div class="col-md-4">
         @include('admin.projects.edit.finishes.finishes')
      </div>
      <div class="col-md-4">
         @include('admin.projects.edit.images.images')
      </div>
   </div>

   <div class="card-footer pt-1 pb-1 pl-2">
      Fields marked with an <span class="required"></span> are required
   </div>

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
@endsection
