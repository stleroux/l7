@extends('layouts.admin.admin-10-2')

@include('admin.faqs.edit.sections.stylesheet')
@include('admin.faqs.edit.sections.pageHeader')
@include('admin.faqs.edit.sections.breadcrumb')
@include('admin.faqs.edit.sections.sidebar')
@include('admin.faqs.edit.sections.blocks')
@include('admin.faqs.edit.sections.formBegin')
@include('admin.faqs.edit.sections.formEnd')

@section ('content')

   @include('admin.faqs.forms.form')

   @include('admin.faqs.help')

@endsection
