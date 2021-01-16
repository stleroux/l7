@extends('layouts.UI.app-10-2')

@section ('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@endsection

@section('pageHeader')
   <i class="{{ config('icons.') }}"></i>
   {{ ucwords($post->title) }}
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('blog.index') }}">Blog</a></li>
   <li class="breadcrumb-item">{{ ucwords($post->title) }}</li>
@endsection

@section('rightColumn')
   @include('UI.blog.blocks.search')
   @include('UI.blog.blocks.popular')
   @include('UI.blog.blocks.archives')
   @include('UI.blog.blocks.leaveComment')
@endsection

@section('topbar')
@endsection

@section('content')

   @include('UI.blog.show.topbar')

   <div class="card card-trans-4">
      <div class="card-body">
         <div class="row">
            <div class="col-9">
               {!! $post->body !!}
            </div>
            <div class="col-3">

               <div class="card mb-2 card-trans-4">
                  <div class="card-header card_header p-1">Image</div>
                  <div class="card-body p-1">
                     @if ($post->image)
                        @auth
                           <div class="text-center">
                              <a href="" data-toggle="modal" data-target="#imageModal">
                                 <img src="/_posts/{{ $post->image }}" alt="" height="100%" width="100%">
                              </a>
                              <a href="" data-toggle="modal" data-target="#imageModal_XL" class="btn btn-xs btn-primary">View Larger</a>
                           </div>
                        @else
                           <img src="/_posts/{{ $post->image }}" alt="" height="100%" width="100%">
                        @endauth
                     @endif
                  </div>
               </div>

               <div class="card mb-0 pb-0 card-trans-4">
                  <div class="card-header card_header p-2">Information</div>
                  <table class="table table-sm mb-0 pb-0">
                     <tbody>
                        <tr>
                           <th>Category</th>
                           <td>{{ ucfirst($post->category->name) }}</td>
                        </tr>
                        <tr>
                           <th>Published On</th>
                           <td>{{ $post->published_at->format(Config::get('settings.dateFormat')) }}</td>
                        </tr>
                        <tr>
                           <th>Views</th>
                           <td>{{ $post->views }}</td>
                        </tr>
                        <tr>
                           <th>Created By</th>
                           <td>@include('common.authorFormat', ['model'=>$post, 'field'=>'user'])</td>
                        </tr>
                        <tr>
                           <th>Create Date</th>
                           <td>{{ $post->created_at->format(Config::get('settings.dateFormat')) }}</td>
                        </tr>
                        <tr>
                           <th>Updated By</th>
                           <td>@include('common.authorFormat', ['model'=>$post, 'field'=>'modifiedBy'])</td>
                        </tr>
                        <tr>
                           <th>Update Date</th>
                           <td>{{ $post->updated_at->format(Config::get('settings.dateFormat')) }}</td>
                        </tr>
                        <tr>
                           <td></td>
                           <td></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            
            </div>
         </div>
      </div>
   </div>

   <div class="row m-0 p-0">
      <div class="col m-0 p-0">
         @include('UI.blog.show.comments')
      </div>
   </div>

   @include('UI.blog.show.imageModal')
   @include('UI.blog.show.imageModal_XL')
   @include('UI.blog.show.printModal')

@endsection
