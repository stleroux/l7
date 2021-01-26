@extends('layouts.admin.admin-10-2')

@include('admin.users.edit.sections.stylesheet')
@include('admin.users.edit.sections.pageHeader')
@include('admin.users.edit.sections.breadcrumb')
@include('admin.users.edit.sections.sidebar')
@include('admin.users.edit.sections.blocks')
@include('admin.users.edit.sections.formBegin')
@include('admin.users.edit.sections.formEnd')

@section('content')

   @include('admin.users.forms.form')
   @include('admin.users.help')

@endsection
