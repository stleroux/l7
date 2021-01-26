{{-- IMAGE --}}

@if(Route::currentRouteName() == 'admin.recipes.edit')
   <div class="col-xs-6 col-sm-2">

      <table width="100%">
         <tr>
            <th>Current Image</th>
         </tr>
         <tr>
            <td>
               @if ($recipe->image)
                  <img src="/_recipes/{{ $recipe->image }}" height="125" width="125" alt="">
               @else
                  <i class="fa fa-5x fa-ban" aria-hidden="true"></i>
               @endif
            </td>
         </tr>
      </table>

   </div>

@endif

<div class="form-group">

   <label for="image" class="col-form-label {{ $required ?? '' }}">Image</label>

   <input
   	type="file"
   	name="image"
   	id="image"
   	value="{{ old('image') ?? $recipe->image }}"
   	class="form-control @error('image') is-invalid @enderror p-1"
   />

   <span class="help-block"><small>Only choose new image to replace the existing one.</small></span>
   
   @error('image')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
