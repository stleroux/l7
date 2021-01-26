@extends('layouts.admin.admin-10-2')

@include('admin.carvings.edit.sections.stylesheet')
@include('admin.carvings.edit.sections.pageHeader')
@include('admin.carvings.edit.sections.breadcrumb')
@include('admin.carvings.edit.sections.sidebar')
@include('admin.carvings.edit.sections.blocks')
@include('admin.carvings.edit.sections.formBegin')
@include('admin.carvings.edit.sections.formEnd')

@section ('content')

   @include('admin.carvings.forms.form')
   @include('admin.carvings.help')

@endsection

@section('secondary')

   @include('admin.carvings.forms.extras')   
   
   <div class="card-footer pt-1 pb-1 pl-2">
      Fields marked with an <span class="required"></span> are required
   </div>

@endsection

@section('scripts')

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

   <script>
      $(document).ready(function() {
         $("#tags").select2();
      });
   </script>

@endsection
