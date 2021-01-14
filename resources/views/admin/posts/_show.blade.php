@extends ('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ config('icons.posts') }}"></i>
   Post :: {{ $post->title }}
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('admin.posts.index') }}">Posts</a></li>
   <li class="breadcrumb-item">View</li>
@endsection

@section('rightSidebar')
@endsection

@section('rightColumn')
@endsection

@section ('content')

<div class="container">
   <form style="display:inline;">

      <div class="card mb-3">
         <div class="card-header section_header p-2">
            {{ $post->title }}
            <span class="float-right">
               <div class="btn-group">
                  @include('admin.posts.buttons.back', ['size'=>'sm'])
                  {{-- @include('admin.posts.buttons.print', ['size'=>'sm']) --}}
                  @include('admin.posts.buttons.printPDF', ['size'=>'sm'])
                  {{-- @include('admin.posts.buttons.privatize', ['size'=>'sm']) --}}
                  @include('admin.posts.buttons.edit', ['size'=>'sm'])
                  {{-- @include('admin.posts.buttons.favorite', ['size'=>'sm']) --}}
                  @include('admin.posts.buttons.publish', ['size'=>'sm'])
                  {{-- @include('admin.posts.buttons.trash', ['size'=>'sm']) --}}
               </div>
            </span>
         </div>
      
         <div class="card-body section_body p-2">
      
            <div class="row">
               {{-- @include('UI.recipes.show.ingredients') --}}
               {{-- @include('admin.posts.show.image') --}}
            </div>

            <div class="row">
               @include('common.view_more', ['message'=>'If you would like to see the full recipe'])
            </div>

            @auth

               <div class="row">
                  {{-- @include('UI.recipes.show.methodology') --}}
               </div>

               <div class="row">
                  {{-- @include('admin.posts.show.category') --}}
                  {{-- @include('admin.posts.show.servings') --}}
                  {{-- @include('admin.posts.show.prep_time') --}}
                  {{-- @include('admin.posts.show.cook_time') --}}
                  {{-- @include('admin.posts.show.personal') --}}
                  {{-- @include('admin.posts.show.views') --}}
                  {{-- @include('admin.posts.show.source') --}}
                  {{-- @include('admin.posts.show.author') --}}
               </div>

               <div class="row">
                  {{-- @include('admin.posts.show.public_notes') --}}
                  {{-- @include('admin.posts.show.private_notes') --}}
               </div>

            @endauth

            <div class="row d-print-none">
               <div class="col">
               {{-- @include('recipes.show.comments') --}}
               {{-- @include('common.comments', ['model'=>$recipe]) --}}
                  {{-- @include('admin.posts.show.comments', ['model'=>$post]) --}}
               </div>
            </div>

         </div>
      </div>

      {{-- @include('modals.image', ['title'=>'Recipe Image', 'img_path'=>'_recipes', 'img_name'=>'image', 'model'=>$recipe]) --}}
      {{-- @include('modals.print', ['title'=>'Print','name'=>'recipes','model'=>$recipe]) --}}
   </form>
</div>

@endsection
