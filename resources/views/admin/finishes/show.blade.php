@extends('layouts.admin.admin-10-2')

@include('admin.finishes.show.sections.stylesheet')
@include('admin.finishes.show.sections.pageHeader')
@include('admin.finishes.show.sections.breadcrumb')
@include('admin.finishes.show.sections.sidebar')
@include('admin.finishes.show.sections.blocks')
@include('admin.finishes.show.sections.formBegin')
@include('admin.finishes.show.sections.formEnd')

@section('content')

   @include('admin.finishes.forms.form')
   @include('admin.finishes.help')

@endsection
