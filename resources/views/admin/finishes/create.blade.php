@extends('layouts.admin.admin-10-2')

@include('admin.finishes.create.sections.stylesheet')
@include('admin.finishes.create.sections.pageHeader')
@include('admin.finishes.create.sections.breadcrumb')
@include('admin.finishes.create.sections.sidebar')
@include('admin.finishes.create.sections.blocks')
@include('admin.finishes.create.sections.formBegin')
@include('admin.finishes.create.sections.formEnd')

@section ('content')

   @include('admin.finishes.forms.form')
   @include('admin.finishes.help')

@endsection
