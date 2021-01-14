@extends('layouts.admin.admin-10-2')

@include('admin.carvings.create.sections.stylesheet')
@include('admin.carvings.create.sections.pageHeader')
@include('admin.carvings.create.sections.breadcrumb')
@include('admin.carvings.create.sections.sidebar')
@include('admin.carvings.create.sections.functions')
@include('admin.carvings.create.sections.formBegin')
@include('admin.carvings.create.sections.formEnd')

@section('content')

      {{-- @include('admin.create.topbar') --}}

      <div class="form-row">
         <div class="col-md-6">
            @include('admin.carvings.fields.general')
         </div>
         <div class="col-md-6">
            @include('admin.carvings.fields.others')
         </div>
      </div>

      <!-- CARD FOOTER -->
      <div class="card-footer pt-1 pb-1 pl-2">
         Fields marked with an <span class="required"></span> are required
      </div>
   
   </form>

   @include('admin.carvings.help')

@endsection








@section('scripts')


   {{-- <script>
      // Add the following code if you want the name of the file appear on select
      $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
      });
   </script> --}}
@endsection
