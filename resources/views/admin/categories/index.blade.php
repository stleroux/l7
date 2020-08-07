@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ Config::get('icons.categories') }}"></i>
   @if(Route::currentRouteName() == 'admin.categories.index')
      Categories
   @else
      Trashed Categories
   @endif
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item active">Categories</li>
@endsection

@section('rightSidebar')
   {{-- @include('admin.users.index.sidebar') --}}
@endsection

@section('content')

   @include('admin.categories.index.topbar')

   <div class="row">

      <div class="col-{{ (Route::currentRouteName() == 'admin.categories.trashed') ? '12' : '8' }}">
         <div class="card">
            
            <!--CARD BODY-->               
            <div class="card-body">
               @include('admin.categories.index.grid')
            </div>
         </div>
      </div>

      @if(Route::currentRouteName() == 'admin.categories.index')
         <div class="col-4">
            @include('admin.categories.create.category')
            @include('admin.categories.create.subcategory')
            @include('admin.categories.create.parent')
         </div>
      @endif
   </div>

   @include('modals.destroy', ['modelName'=>'category'])
   @include('modals.massDestroy', ['modelName'=>'category'])
   @include('modals.massRestore', ['modelName'=>'category'])
   @include('modals.delete', ['modelName'=>'category'])
   @include('modals.massDelete', ['modelName'=>'category'])
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