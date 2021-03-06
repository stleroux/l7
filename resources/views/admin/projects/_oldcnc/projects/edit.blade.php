@extends('layouts.admin.admin-10-2')

@include('admin.projects.projects.edit.sections.stylesheet')
@include('admin.projects.projects.edit.sections.pageHeader')
@include('admin.projects.projects.edit.sections.breadcrumb')
@include('admin.projects.projects.edit.sections.sidebar')
@include('admin.projects.projects.edit.sections.functions')
@include('admin.projects.projects.edit.sections.formBegin')
@include('admin.projects.projects.edit.sections.formEnd')

@section ('content')

      <div class="form-row">
         <div class="col-md-6">
            @include('admin.projects.projects.fields.general')
         </div>
         <div class="col-md-6">
            @include('admin.projects.projects.fields.others')
         </div>
      </div>
                  
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
