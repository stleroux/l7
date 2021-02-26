@extends ('layouts.UI.print')

@section ('title', 'Print Recipe')

@section ('stylesheet')
@endsection

@section ('content')

   @foreach($recipes as $recipe)
      
      <div class="row">
         <div class="col">
            @if($loop->first)
               <span class="float-right">
                  <div class="btn-group bg-light border">
                     {{-- @include('recipes.buttons.back', ['size'=>'sm', 'label'=>'']) --}}
                     @include('UI.recipes.buttons.back', ['size'=>'xs', 'btn_label'=>'Back'])
                     @include('UI.recipes.buttons.print2', ['size'=>'xs', 'btn_label'=>'Print'])
                  </div>
               </span>
            @endif
         </div>
      </div>

      <div class="card" style="page-break-after: always">
      
         <div class="card-header bg-dark p-1">
            <span class="h3">{{ ucwords($recipe->title) }}</span>
            <span class="float-right">
               <small>From the Recipe Book at TheWoodBarn.ca</small>
            </span>
         </div>
      
         <div class="card-body p-1">

            <div class="card mb-2 p-0">

               <div class="card-header bg-secondary p-1">Information</div>

               <table class="table table-sm mb-0">
                  <tr>
                     <th>Category</th>
                     <th>Servings</th>
                     <th>Prep Time</th>
                     <th>Cook Time</th>
                     <th>Created By</th>
                     <th>Created On</th>
                     <th>Source</th>
                  </tr>
                  <tr>
                     <td>{{ ucwords($recipe->category->name) }}</td>
                     <td>{{ $recipe->servings }}</td>
                     <td>{{ $recipe->prep_time }} minutes</td>
                     <td>{{ $recipe->cook_time }} minutes</td>
                     <td>{{ $recipe->user->first_name }} {{ $recipe->user->last_name }}</td>
                     <td>{{ $recipe->created_at }}</td>
                     <td>
                        @if ($recipe->source)
                           {{ $recipe->source }}
                        @else
                           N/A
                        @endif
                     </td>
                  </tr>
               </table>

            </div>

            <div class="row">
               <div class="col-12 col-sm-8">
                  <div class="card mb-2">
                     <div class="card-header bg-secondary p-1">Ingredients</div>
                     <div class="card-body p-1">
                        {!! $ingredients = str_replace(array('<p>','</p>'),array('','<br />'),$recipe->ingredients) !!}
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-4">
                  <div class="card mb-2 p-0">
                     <div class="card-header bg-secondary p-1">Image</div>
                     <div class="card-body text text-center p-0 m-0">
                        @if($recipe->image)
                           <img src="/_recipes/{{ $recipe->image }}" alt="" height="200px" width="auto" class="card-img">
                        @else
                           <img src="/_recipes/image_not_available.jpg" alt="" height="200px" width="auto" class="card-img">
                        @endif
                     </div>
                  </div>
               </div>
            </div>
            
            <div class="row">
               <div class="col-12">
                  <div class="card mb-2">
                     <div class="card-header bg-secondary p-1">Methodology</div>
                     <div class="card-body p-1">
                        {!! $recipe->methodology = str_replace(array('<p>','</p>'),array('','<br />'),$recipe->methodology) !!}
                     </div>
                  </div>
                  <div class="card" style="margin-bottom: 0px">
                     <div class="card-header bg-secondary p-1">Notes</div>
                     <div class="card-body p-1">
                        @if ($recipe->public_notes) 
                           {!! $recipe->public_notes = str_replace(array('<p>','</p>'),array('','<br />'),$recipe->public_notes) !!}
                        @else
                           N/A
                        @endif
                     </div>
                  </div>
               </div>
            </div>

         </div><!-- End of Main Card body -->
      
      </div><!-- End of Main Card -->

   @endforeach

@endsection
