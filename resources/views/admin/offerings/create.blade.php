@extends('layouts.admin.admin-10-2')

@include('admin.offerings.create.sections.stylesheet')
@include('admin.offerings.create.sections.pageHeader')
@include('admin.offerings.create.sections.breadcrumb')
@include('admin.offerings.create.sections.sidebar')
@include('admin.offerings.create.sections.blocks')
@include('admin.offerings.create.sections.formBegin')
@include('admin.offerings.create.sections.formEnd')

@section('content')

   @include('admin.offerings.forms.form')

   @include('admin.offerings.help')

@endsection
