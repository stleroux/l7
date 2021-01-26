@extends('layouts.admin.admin-10-2')

@include('admin.features.show.sections.stylesheet')
@include('admin.features.show.sections.pageHeader')
@include('admin.features.show.sections.breadcrumb')
@include('admin.features.show.sections.sidebar')
@include('admin.features.show.sections.blocks')
@include('admin.features.show.sections.formBegin')
@include('admin.features.show.sections.formEnd')

@section('content')

   @include('admin.features.forms.form')
   @include('admin.features.help')

@endsection
