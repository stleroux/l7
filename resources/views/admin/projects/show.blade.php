@extends('layouts.admin')

@section('stylesheet')
	{{-- {{ Html::style('css/woodbarn.css') }} --}}
@endsection

@section('pageHeader')
   <i class="fab fa-pagelines"></i>
   {{ ucwords($project->name) }} Project Information
@endsection

@section('breadcrumbs')
@endsection

@section('rightSidebar')
   {{-- @include('projects.blocks.leave_comment') --}}
   {{-- @include('projects.blocks.purchase')   --}}
@endsection

@section('content')

   @include('admin.projects.show.topbar')

   <div class="card mb-3">

   	<div class="card-body p-2">



<div class="row">
   <div class="col-12 col-xl-6">@include('admin.projects.blocks.imageSlider')</div>
   
   <div class="col-12 col-xl-6">
      <div class="row">
         <div class="col-12 col-lg-6 p-0 m-0">
            <div class="col-12 col-xl-12">@include('admin.projects.show.description')</div>
            <div class="col-12 col-xl-12">@include('admin.projects.show.materials')</div>
            <div class="col-12 col-xl-12">@include('admin.projects.show.finishes')</div>
         </div>
         <div class="col-12 col-xl-6">
            <div class="card card-outline card-primary">
               <div class="card-header">
                  <div class="card-title">Information</div>
               </div>
               <div class="card-body p-0">
                  @include('admin.projects.show.information')
               </div>
            </div>
         </div>
      </div>
   </div>
   
</div>

<div class="row">
   <div class="col">
      @include('common.comments', ['model'=>$project])
   </div>
</div>



{{-- <br /><br /><br /><br /><br /><br /><br /><br />

   		@include('admin.projects.show.general')
         @auth
            @include('admin.projects.show.others')
            @include('admin.projects.show.materials')
            @include('admin.projects.show.finishes')
         @endauth
         @guest --}}
            {{-- @include('common.view_more') --}}
         {{-- @endguest --}}
   		{{-- @include('projects.show.comments') --}}
         {{-- @include('common.comments', ['model'=>$project]) --}}
         {{-- {{ $projects->links() }} --}}
   	{{-- </div> --}}
   {{-- </div> --}}

@endsection


{{--
@if($image)
<img class="img-responsive w-100" src="/_projects/{{ $project->id }}/thumbs/{{ $image->name }}" alt="{{ $image->name }}">
<span class="text-light">Might be distorted</span>
@else
<img src="/images/no_image.jpg" alt="No Image" height="100%" width="100%">
@endif
--}}