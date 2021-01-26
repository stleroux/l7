@extends('layouts.admin.admin-10-2')

@include('admin.materials.create.sections.stylesheet')
@include('admin.materials.create.sections.pageHeader')
@include('admin.materials.create.sections.breadcrumb')
@include('admin.materials.create.sections.sidebar')
@include('admin.materials.create.sections.blocks')
@include('admin.materials.create.sections.formBegin')
@include('admin.materials.create.sections.formEnd')

@section ('content')

   @include('admin.materials.forms.form')
   @include('admin.materials.help')

@endsection
