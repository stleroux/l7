@extends('layouts.admin.admin-10-2')

@include('admin.blocks.create.sections.stylesheet')
@include('admin.blocks.create.sections.pageHeader')
@include('admin.blocks.create.sections.breadcrumb')
@include('admin.blocks.create.sections.sidebar')
@include('admin.blocks.create.sections.blocks')
@include('admin.blocks.create.sections.formBegin')
@include('admin.blocks.create.sections.formEnd')

@section('content')

   @include('admin.blocks.forms.form')
   @include('admin.blocks.help')

@endsection
