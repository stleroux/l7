@extends('layouts.admin.admin-10-2')

@include('admin.posts.show.sections.stylesheet')
@include('admin.posts.show.sections.pageHeader')
@include('admin.posts.show.sections.breadcrumb')
@include('admin.posts.show.sections.sidebar')
@include('admin.posts.show.sections.blocks')
@include('admin.posts.show.sections.formBegin')
@include('admin.posts.show.sections.formEnd')

@section('content')

   {{-- @include('admin.posts.show.topbar') --}}
   
   <div class="card card-trans-4">
      
      <div class="card-header">
         <div class="row">
            <div class="col">
               <div>
                  {{ ucfirst($post->title) }}
               </div>
            </div>
            {{-- <div class="col text-right">
               Status: 
               <div class="badge badge-danger">
                  @if($post->status)
                     {{ $post->status }}
                  @else
                     N/A
                  @endif
               </div>
            </div> --}}
         </div>
      </div>
      
      <div class="card-body p-2">
         
         <table class="table table-sm table-hover table-striped">
            <thead>
               <tr>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <th>Category</th>
                  <td>{{ $post->category->name }}</td>
               </tr>
               <tr>
                  <th>Published Date</th>
                  <td>{{ $post->published_at }}</td>
               </tr>
               <tr>
                  <th>Body</th>
                  <td>{!! $post->body !!}</td>
               </tr>
               <tr>
                  <th>Author</th>
                  <td>{{ $post->user->username }}</td>
               </tr>
            </tbody>
         </table>

      </div>

   </div>

   @include('common.audits')

   @include('admin.posts.help')

@endsection
