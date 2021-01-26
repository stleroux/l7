@extends('layouts.admin.admin-10-2')

@include('admin.bugs.show.sections.stylesheet')
@include('admin.bugs.show.sections.pageHeader')
@include('admin.bugs.show.sections.breadcrumb')
@include('admin.bugs.show.sections.sidebar')
@include('admin.bugs.show.sections.blocks')
@include('admin.bugs.show.sections.formBegin')
@include('admin.bugs.show.sections.formEnd')

@section('content')

   @include('admin.bugs.forms.form')
   @include('admin.bugs.help')

@endsection
