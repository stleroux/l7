@extends ('layouts.UI.print')

@section ('title', 'Print Recipe')

@section ('stylesheet')

@endsection

@section ('content')

   <div class="row">
      <div class="col">
         <span class="float-right">
            <div class="btn-group bg-light border">
               {{-- @include('UI.recipes.buttons.back', ['size'=>'xs', 'btn_label'=>'Back']) --}}
               <a href="{{ url()->previous() }}" class="btn btn-xs btn-maroon d-print-none">Back</a>
               @include('UI.recipes.buttons.print2', ['size'=>'xs', 'btn_label'=>'Print'])
            </div>
         </span>
      </div>
   </div>

   <div class="card" style="page-break-after: always">
   
      <div class="card-header bg-dark">
         <div class="row">
            <div class="col">
               <div class="h3">{{ ucwords($recipe->title) }}</div>
            </div>
            <div class="">
               <small class="text-right">From the Recipe Book at TheWoodBarn.ca</small>
            </div>
         </div>
      </div>


   
      <div class="card-body p-1">

         <div class="card mb-2 p-0">

            {{-- <div class="card-header bg-secondary p-1">Information</div> --}}

            <table class="table table-sm table-bordered mb-0">
               <tr class="text-center">
                  <th>Category</th>
                  <th>Servings</th>
                  <th>Prep Time</th>
                  <th>Cook Time</th>
                  <th>Created By</th>
                  <th>Created On</th>
                  <th>Source</th>
               </tr>
               <tr class="text-center">
                  <td>{{ ucwords($recipe->category->name) }}</td>
                  <td>{{ $recipe->servings }}</td>
                  <td>{{ $recipe->prep_time_minutes }} minutes</td>
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

@endsection
