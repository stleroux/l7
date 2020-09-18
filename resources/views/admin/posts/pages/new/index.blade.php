@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ Config::get('icons.posts') }}"></i>
   New Posts
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('admin.posts.index') }}">Posts</a></li>
   <li class="breadcrumb-item">New Post</li>
@endsection

@section('rightSidebar')
@endsection

@section('right_column')
@endsection

@section('content')

   @include('admin.posts.pages.new.topbar')

   <div class="row">
      <div class="col">
         <div class="card mb-3">
            <!--CARD BODY-->
            <div class="card-body p-3">
               @include('admin.posts.pages.new.grid')
            </div>
         </div>
      </div>
   </div>


   @include('modals.destroy', ['modelName'=>'post'])
   @include('modals.massDestroy', ['modelName'=>'post'])
      {{-- @include('modals.restore', ['modelName'=>'post']) --}}
   @include('modals.massRestore', ['modelName'=>'post'])
   @include('modals.delete', ['modelName'=>'post'])
   @include('modals.massDelete', ['modelName'=>'post'])
   @include('modals.massPublish', ['modelName'=>'post'])
   @include('modals.massUnpublish', ['modelName'=>'post'])
   @include('admin.posts.help')

@endsection


@section('content')

   <form style="display:inline;">
      {!! csrf_field() !!}

      @include('admin.posts.pages.new.topbar')
      
      <div class="card">
         {{-- <div class="card-header section_header p-2">
            <i class="{{ Config::get('buttons.new') }}"></i>
            New Recipes
            <span class="float-right">
               <div class="btn-group">
                  @include('admin.posts.buttons.help', ['size'=>'xs', 'bookmark'=>'recipes'])
                  @include('admin.posts.buttons.unpublishAll', ['size'=>'xs'])
                  @include('admin.posts.buttons.trashAll', ['size'=>'xs'])
                  @include('admin.posts.buttons.add', ['size'=>'xs'])
               </div>
            </span>
         </div> --}}

         @if($posts->count() > 0)
            <div class="card-body section_body p-2">
               {{-- @include('recipes.alphabet', ['model'=>'recipe', 'page'=>'newRecipes']) --}}
               <table id="datatable" class="table table-sm table-hover">
                  <thead>
                     <tr>
                         {{-- <th><input type="checkbox" id="selectall" class="checked" /></th> --}}
                         <th class="no-sort" width="30px">
                           <div class="icheck-primary d-inline">
                              <input type="checkbox" class="checkbox_all" id="checkbox_all" onchange="showHide(this.checked)">
                              <label for="checkbox_all"></label>
                           </div>
                        </th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Views</th>
                        <th>Author</th>
                        <th>Created On</th>
                        <th>Publish(ed) On</th>
                        <th data-orderable="false"></th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($posts as $post)
                     <tr>
                        {{-- <td><input type="checkbox" onClick="checkbox_is_checked()" name="checked[]" value="{{$recipe->id}}" class="check-all"></td> --}}
                        <td>
                           <div class="icheck-primary d-inline">
                              <input
                              type="checkbox"
                              class="record checkbox_record"
                              name="entries[]"
                              onchange="showHide(this.checked)"
                              value="{{ $post->id }}"
                              id="{{ $post->id}}" />
                              <label for="{{ $post->id }}"></label>
                           </div>
                        </td>
                        <td><a href="{{ route('admin.posts.show', $post->id) }}">{{ ucwords($post->title) }}</a></td>
                        <td>{{ ucwords($post->category->name) }}</td>
                        <td>{{ $post->views }}</td>
                        <td>@include('common.authorFormat', ['model'=>$post, 'field'=>'user'])</td>
                        <td>@include('common.dateFormat', ['model'=>$post, 'field'=>'created_at'])</td>
                        <td>@include('common.dateFormat', ['model'=>$post, 'field'=>'published_at'])</td>
                        <td class="text-right">
                           <div class="btn-group">
                              @include('admin.posts.buttons.view', ['size'=>'sm'])
                              @include('admin.posts.buttons.edit', ['size'=>'sm'])
                              @include('admin.posts.buttons.trash', ['size'=>'sm'])
                           </div>
                        </td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         @else
            <div class="card-body card_body p-2">
               {{ Config::get('settings.noRecordsFound') }}
              </div>
         @endif

      </div>
   </form>
   
   @include('admin.posts.help')
   
@endsection
