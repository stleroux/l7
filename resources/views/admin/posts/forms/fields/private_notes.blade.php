<!-- AUTHOR NOTES -->
   
<div class="form-group">
   
   <label for="private_notes" class="col-form-label {{ $required ?? '' }}">Author Notes <small>(Not shown to public)</small></label>
   
   @if(Route::currentRouteName('') == 'admin.posts.show')

      <div class="p-1 m-0 bg-gray-light">
         {!! $post->private_notes ?? 'N/A' !!}
      </div>

   @else

      <textarea
      	name="private_notes"
      	id="private_notes"
      	rows="2"
      	cols=""
      	class="simple form-control">{{ old('private_notes') ?? $post->private_notes }}</textarea>
      
      @error('private_notes')
         <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
         </span>
      @enderror

   @endif

</div>
