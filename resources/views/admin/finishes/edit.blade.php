@extends('layouts.admin.admin-10-2')

@include('admin.finishes.edit.sections.stylesheet')
@include('admin.finishes.edit.sections.pageHeader')
@include('admin.finishes.edit.sections.breadcrumb')
@include('admin.finishes.edit.sections.sidebar')
@include('admin.finishes.edit.sections.blocks')
@include('admin.finishes.edit.sections.formBegin')
@include('admin.finishes.edit.sections.formEnd')

@section ('content')
   
   @include('admin.finishes.forms.form')
   @include('admin.finishes.help')

@endsection
