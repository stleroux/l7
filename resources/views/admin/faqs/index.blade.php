@extends('layouts.admin.admin-10-2')

@include('admin.faqs.index.sections.stylesheet')
@include('admin.faqs.index.sections.pageHeader')
@include('admin.faqs.index.sections.breadcrumb')
@include('admin.faqs.index.sections.sidebar')
@include('admin.faqs.index.sections.blocks')
@include('admin.faqs.index.sections.formBegin')
@include('admin.faqs.index.sections.formEnd')

@section('content')

   <div class="row">
      <div class="col">
         <div class="card mb-3">
            <!--CARD BODY-->
            <div class="card-body p-3">
               @include('admin.faqs.index.grid')
            </div>
         </div>
      </div>
   </div>

   @include('modals.destroy',       ['modelName'=>'faq'])
   @include('modals.massDestroy',   ['modelName'=>'faq'])
   @include('modals.restore',       ['modelName'=>'faq'])
   @include('modals.massRestore',   ['modelName'=>'faq'])
   @include('modals.delete',        ['modelName'=>'faq'])
   @include('modals.massDelete',    ['modelName'=>'faq'])
   {{-- @include('modals.resetViews',    ['modelName'=>'faq']) --}}
   {{-- @include('modals.massResetViews',['modelName'=>'faq']) --}}
   @include('modals.publish',       ['modelName'=>'faq'])
   @include('modals.massPublish',   ['modelName'=>'faq'])
   @include('modals.unpublish',     ['modelName'=>'faq'])
   @include('modals.massUnpublish', ['modelName'=>'faq'])

   @include('admin.faqs.help')

@endsection
