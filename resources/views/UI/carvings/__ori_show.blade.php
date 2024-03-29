@extends('layouts.UI.app-10')

@section('stylesheet')
	<link rel="stylesheet" href="{{ asset('css/UI/projects.css') }}">
@endsection

@section('pageHeader')
   <i class="{{ config('icons.projects') }}"></i>
   Projects
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('projects.index') }}"></a>Projects</li>
   <li class="breadcrumb-item">{{ $project->name }}</li>   
@endsection

@section('rightColumn')
   {{-- @include('UI.projects.blocks.popular') --}}
   @include('UI.projects.blocks.imageSlider')
   {{-- @include('UI.projects.blocks.leave_comment') --}}
   @include('UI.projects.blocks.purchase')  
@endsection

@section('content')

<div class="container-fluid">
   <div class="card mb-3">
      <div class="card-header section_header p-2">
         <div class="row d-flex justify-content-center">
            <div class="col-sm-4 float-left">
               <i class="fab fa-pagelines"></i>
               {{ ucwords($project->name) }} Project Information
            </div>
            <div class="col-sm-4 text-center">
               @include('UI.projects.buttons.previous', ['size'=>'xs'])
               @include('UI.projects.buttons.next', ['size'=>'xs'])
            </div>
            <div class="col-sm-4 text text-right">
               <div class="btn-group">
                  {{-- @include('projects.buttons.previous', ['size'=>'xs'])
                  @include('projects.buttons.next', ['size'=>'xs']) --}}
                  {{-- @include('admin.projects.buttons.edit', ['size'=>'xs']) --}}
                  @include('UI.projects.buttons.back', ['size'=>'xs'])
               </div>
            </div>
         </div>
	  </div>
   	<div class="card-body section_body p-2">
   		@include('UI.projects.partials.show.general')
         @auth
            @include('UI.projects.partials.show.others')
            @include('UI.projects.partials.show.materials')
            @include('UI.projects.partials.show.finishes')
         @endauth
         @guest
            @include('common.view_more')
         @endguest
   		{{-- @include('projects.partials.show.comments') --}}
         @include('common.comments', ['model'=>$project])
         {{-- {{ $projects->links() }} --}}
   	</div>
   </div>
</div>
@endsection


{{--
@if($image)
<img class="img-responsive w-100" src="/_projects/{{ $project->id }}/thumbs/{{ $image->name }}" alt="{{ $image->name }}">
<span class="text-light">Might be distorted</span>
@else
<img src="/images/no_image.jpg" alt="No Image" height="100%" width="100%">
@endif
--}}