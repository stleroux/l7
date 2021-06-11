<!-- PUBLIC NOTES -->
   
<div class="form-group">
   
   <label for="public_notes" class="col-form-label {{ $required ?? '' }}">Public Notes</label>
   
   @if(Route::currentRouteName('') == 'admin.posts.show')

      <div class="p-1 m-0 bg-gray-light">
         {!! $post->public_notes ?? 'N/A' !!}
      </div>

   @else

      <textarea
      	name="public_notes"
      	id="public_notes"
      	rows="2"
      	cols=""
      	class="simple form-control">{{ old('public_notes') ?? $post->public_notes }}</textarea>
      
      @error('public_notes')
         <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
         </span>
      @enderror

   @endif

</div>
