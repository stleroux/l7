@extends('layouts.admin.admin-7-2-3')

@include('admin.permissions.index.sections.stylesheet')
@include('admin.permissions.index.sections.pageHeader')
@include('admin.permissions.index.sections.breadcrumb')
@include('admin.permissions.index.sections.sidebar')
@include('admin.permissions.index.sections.formBegin')
@include('admin.permissions.index.sections.formEnd')

@section('addition')
   @if(Route::currentRouteName() == 'admin.permissions.index')
      {{-- <div class="col-xl-4"> --}}
         @include('common.form_submission_error')
         @include('admin.permissions.create.single')
         @include('admin.permissions.create.multiple')
         @include('admin.permissions.create.crud')
         @include('admin.permissions.create.bread')
      {{-- </div> --}}
   @endif
@endsection

@section('content')

   {{-- @include('admin.permissions.index.topbar') --}}

   {{-- <div class="row"> --}}

      {{-- <div class="col-xl-{{ ((Route::currentRouteName() == 'admin.permissions.index') && (Gate::allows('permission-create')) ? '8' : '12') }}"> --}}

         <div class="card mb-3">
            <div class="card-body p-3">
               @include('admin.permissions.index.grid')
               @include('admin.permissions.index.sections.blocks')
            </div>
         </div>
      {{-- </div> --}}

   {{-- </div> --}}
   
   @include('modals.destroy',       ['modelName'=>'permission'])
   @include('modals.massDestroy',   ['modelName'=>'permission'])
   @include('modals.restore',       ['modelName'=>'permission'])
   @include('modals.massRestore',   ['modelName'=>'permission'])
   @include('modals.delete',        ['modelName'=>'permission'])
   @include('modals.massDelete',    ['modelName'=>'permission'])
   @include('admin.permissions.help')

@endsection

@section('scripts')

   <!-- Needed in Permissions Index to allow dynamically adding row to the Multiple permissions section -->
   <script type="text/javascript">
      $('.addRow').on('click', function(){
         addRow();
      });

      function addRow(){
      // alert('test');
         var tr = '<tr>'+
            '<td>'+
               '<input type="text" name="permName[]" class="form-control form-control-sm" placeholder="Minimum 3 characters">'+
               '<div class="pl-1 bg-danger">{{ $errors->first('permName') }}</div>'+
            '</td>'+
            '<td><input type="text" name="permDescription[]" class="form-control form-control-sm"></td>'+
            '<td class="text-center"><a href="#" class="btn btn-sm btn-danger remove"><i class="far fa-minus-square"></i></a></td>'+
            '</tr>';

         $('#permissions').append(tr);
      };

      $('tbody').on('click', '.remove', function(){
         $(this).parent().parent().remove();
      });

   </script>

@endsection
