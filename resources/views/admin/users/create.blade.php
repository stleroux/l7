@extends('layouts.admin.admin-10-2')

@include('admin.users.create.sections.stylesheet')
@include('admin.users.create.sections.pageHeader')
@include('admin.users.create.sections.breadcrumb')
@include('admin.users.create.sections.sidebar')
@include('admin.users.create.sections.functions')
@include('admin.users.create.sections.formBegin')
@include('admin.users.create.sections.formEnd')

@section('content')

      <div class="row">
         <div class="col-xl-6">
            @include('admin.users.form.user')
            @include('admin.users.form.contact')
            @include('admin.users.form.address')
         </div>

         <div class="col-xl-3">
            @include('admin.users.form.image')
            @include('admin.users.form.other')
         </div>

         <div class="col-xl-3">
            @include('admin.users.form.fields.roles')
            @include('admin.users.form.password')
         </div>

      </div>

      @include('admin.users.help')

   </form>

@endsection

@section('scripts')
   <!-- Bootstrap Switch -->
   <script src="{{ asset('plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
   <script>
      $("input[data-bootstrap-switch]").each(function(){
         $(this).bootstrapSwitch('state', $(this).prop('checked'));
      });
   </script>
@endsection
