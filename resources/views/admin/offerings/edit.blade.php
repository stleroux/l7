@extends('layouts.admin.admin-10-2')

@include('admin.offerings.edit.sections.stylesheet')
@include('admin.offerings.edit.sections.pageHeader')
@include('admin.offerings.edit.sections.breadcrumb')
@include('admin.offerings.edit.sections.sidebar')
@include('admin.offerings.edit.sections.blocks')
@include('admin.offerings.edit.sections.formBegin')
@include('admin.offerings.edit.sections.formEnd')

@section ('content')

   @include('admin.offerings.forms.form')

   @include('admin.offerings.help')

@endsection
