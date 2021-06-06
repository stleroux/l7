@extends('layouts.admin.admin-7-2-3')

@include('admin.categories.index.sections.stylesheet')
@include('admin.categories.index.sections.pageHeader')
@include('admin.categories.index.sections.breadcrumb')
@include('admin.categories.index.sections.sidebar')
@include('admin.categories.index.sections.formBegin')
@include('admin.categories.index.sections.formEnd')

@section('addition')
   @include('common.form_submission_error')
   @include('admin.categories.create.category')
   @include('admin.categories.create.subcategory')
   @include('admin.categories.create.parent')
@endsection

@section('content')
   
   <div class="card mb-3">
      
      <div class="card-body p-3">
         @include('admin.categories.index.grid')
         @include('admin.categories.index.sections.blocks')
      </div>

   </div>
      
   @include('modals.destroy',       ['modelName'=>'category'])
   @include('modals.massDestroy',   ['modelName'=>'category'])
   @include('modals.restore',       ['modelName'=>'category'])
   @include('modals.massRestore',   ['modelName'=>'category'])
   @include('modals.delete',        ['modelName'=>'category'])
   @include('modals.massDelete',    ['modelName'=>'category'])
   @include('admin.categories.help')

@endsection

@section('scripts')

   <script>
      $(document).ready(function () { 
         $('#cCategory').on('change',function(e){
            console.log(e);
            var cat_id = e.target.value;
            //ajax
            $.get('/ajax-subcat?cat_id='+ cat_id,function(data){
               //success data
               //console.log(data);
               var subcat =  $('#cSubcategory').empty();
               $.each(data,function(create,subcatObj){
                  var option = $('<option/>', {id:create, value:subcatObj});
                     subcat.append('<option value ="'+subcatObj+'">'+subcatObj+'</option>');
               });
            });
         });
      });
   </script>

@endsection