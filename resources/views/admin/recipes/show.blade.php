@extends ('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ Config::get('icons.recipes') }}"></i>
   Recipe :: {{ $recipe->title }}
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('admin.recipes.index') }}">Recipes</a></li>
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
            {{ $recipe->title }}
            <span class="float-right">
               <div class="btn-group">
                  @include('admin.recipes.buttons.back', ['size'=>'sm'])
                  @include('admin.recipes.buttons.print', ['size'=>'sm'])
                  @include('admin.recipes.buttons.printPDF', ['size'=>'sm'])
                  {{-- @include('admin.recipes.buttons.privatize', ['size'=>'sm']) --}}
                  @include('admin.recipes.buttons.edit', ['size'=>'sm'])
                  {{-- @include('admin.recipes.buttons.favorite', ['size'=>'sm']) --}}
                  @include('admin.recipes.buttons.publish', ['size'=>'sm'])
                  {{-- @include('admin.recipes.buttons.trash', ['size'=>'sm']) --}}
               </div>
            </span>
         </div>
      
         <div class="card-body section_body p-2">
      
            <div class="row">
               @include('UI.recipes.show.ingredients')
               @include('UI.recipes.show.image')
            </div>

            <div class="row">
               @include('common.view_more', ['message'=>'If you would like to see the full recipe'])
            </div>

            @auth

               <div class="row">
                  @include('UI.recipes.show.methodology')
               </div>

               <div class="row">
                  @include('UI.recipes.show.category')
                  @include('UI.recipes.show.servings')
                  @include('UI.recipes.show.prep_time')
                  @include('UI.recipes.show.cook_time')
                  @include('UI.recipes.show.personal')
                  @include('UI.recipes.show.views')
                  @include('UI.recipes.show.source')
                  @include('UI.recipes.show.author')
               </div>

               <div class="row">
                  @include('UI.recipes.show.public_notes')
                  @include('UI.recipes.show.private_notes')
               </div>

            @endauth

            <div class="row d-print-none">
               <div class="col">
               {{-- @include('recipes.show.comments') --}}
               {{-- @include('common.comments', ['model'=>$recipe]) --}}
                  @include('admin.recipes.show.comments', ['model'=>$recipe])
               </div>
            </div>

         </div>
      </div>

      {{-- @include('modals.image', ['title'=>'Recipe Image', 'img_path'=>'_recipes', 'img_name'=>'image', 'model'=>$recipe]) --}}
      {{-- @include('modals.print', ['title'=>'Print','name'=>'recipes','model'=>$recipe]) --}}
   </form>
</div>

@endsection
