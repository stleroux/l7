@extends ('layouts.admin.admin-10-2')

@include('admin.recipes.show.sections.stylesheet')
@include('admin.recipes.show.sections.pageHeader')
@include('admin.recipes.show.sections.breadcrumb')
@include('admin.recipes.show.sections.sidebar')
@include('admin.recipes.show.sections.functions')
@include('admin.recipes.show.sections.formBegin')
@include('admin.recipes.show.sections.formEnd')

@section ('content')

{{-- <div class="container"> --}}
   {{-- <form style="display:inline;"> --}}

      <div class="card mb-3">
         {{-- <div class="card-header p-2">
            {{ $recipe->title }}
            <span class="float-right">
               <div class="btn-group"> --}}
                  {{-- @include('admin.recipes.buttons.back', ['size'=>'sm']) --}}
                  {{-- @include('admin.recipes.buttons.print', ['size'=>'sm']) --}}
                  {{-- @include('admin.recipes.buttons.printPDF', ['size'=>'sm']) --}}
                  {{-- @include('admin.recipes.buttons.privatize', ['size'=>'sm']) --}}
                  {{-- @include('admin.recipes.buttons.edit', ['size'=>'sm']) --}}
                  {{-- @include('admin.recipes.buttons.favorite', ['size'=>'sm']) --}}
                  {{-- @include('admin.recipes.buttons.publish', ['size'=>'sm']) --}}
                  {{-- @include('admin.recipes.buttons.trash', ['size'=>'sm']) --}}
               {{-- </div>
            </span>
         </div> --}}
      
         <div class="card-body p-2">
      
            <div class="row">
               @include('admin.recipes.show.ingredients')
               @include('admin.recipes.show.image')
            </div>

{{--             <div class="row">
               @include('common.view_more', ['message'=>'If you would like to see the full recipe'])
            </div> --}}

            @auth

               <div class="row">
                  @include('admin.recipes.show.methodology')
               </div>

               <div class="row">
                  @include('admin.recipes.show.category')
                  @include('admin.recipes.show.servings')
                  @include('admin.recipes.show.prep_time')
                  @include('admin.recipes.show.cook_time')
                  @include('admin.recipes.show.personal')
                  @include('admin.recipes.show.views')
                  @include('admin.recipes.show.source')
                  @include('admin.recipes.show.author')
               </div>

               <div class="row">
                  @include('admin.recipes.show.public_notes')
                  @include('admin.recipes.show.private_notes')
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
   {{-- </form> --}}
{{-- </div> --}}

   @include('modals.destroy', ['modelName'=>'recipe'])
   @include('modals.massDestroy', ['modelName'=>'recipe'])
   @include('modals.restore', ['modelName'=>'recipe'])
   @include('modals.massRestore', ['modelName'=>'recipe'])
   @include('modals.delete', ['modelName'=>'recipe'])
   @include('modals.massDelete', ['modelName'=>'recipe'])
   @include('modals.massPublish', ['modelName'=>'recipe'])
   @include('modals.massUnpublish', ['modelName'=>'recipe'])
   @include('modals.publish', ['modelName'=>'recipe'])
   @include('modals.unpublish', ['modelName'=>'recipe'])
   @include('modals.resetViews', ['modelName'=>'recipe'])
   @include('modals.massResetViews', ['modelName'=>'recipe'])

   @include('admin.recipes.help')

@endsection
