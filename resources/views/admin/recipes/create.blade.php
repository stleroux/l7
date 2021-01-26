@extends('layouts.admin.admin-10-2')

@include('admin.recipes.create.sections.stylesheet')
@include('admin.recipes.create.sections.pageHeader')
@include('admin.recipes.create.sections.breadcrumb')
@include('admin.recipes.create.sections.sidebar')
@include('admin.recipes.create.sections.blocks')
@include('admin.recipes.create.sections.formBegin')
@include('admin.recipes.create.sections.formEnd')

@section ('content')

   @include('admin.recipes.forms.form')
   @include('admin.recipes.help')
   
@endsection
