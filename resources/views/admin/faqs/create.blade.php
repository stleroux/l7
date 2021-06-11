@extends('layouts.admin.admin-10-2')

@include('admin.faqs.create.sections.stylesheet')
@include('admin.faqs.create.sections.pageHeader')
@include('admin.faqs.create.sections.breadcrumb')
@include('admin.faqs.create.sections.sidebar')
@include('admin.faqs.create.sections.blocks')
@include('admin.faqs.create.sections.formBegin')
@include('admin.faqs.create.sections.formEnd')

@section('content')

   @include('admin.faqs.forms.form')

   @include('admin.faqs.help')

@endsection
