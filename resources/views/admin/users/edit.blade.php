@extends('layouts.admin.admin-10-2')

@include('admin.users.edit.sections.stylesheet')
@include('admin.users.edit.sections.pageHeader')
@include('admin.users.edit.sections.breadcrumb')
@include('admin.users.edit.sections.sidebar')
@include('admin.users.edit.sections.functions')
@include('admin.users.edit.sections.formBegin')
@include('admin.users.edit.sections.formEnd')

@section('content')

   <div class="row">
      <div class="col-xl-6">
         @include('admin.users.form.account')
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

@endsection
