{{-- IMAGE --}}

<div class="form-group">

   <label for="image" class="col-form-label {{ $required ?? '' }}">Image</label>

   <input
   	type="file"
   	name="image"
   	id="image"
   	value="{{ old('image') ?? $post->image }}"
   	class="form-control @error('image') is-invalid @enderror p-1"
   />

   <span class="help-block"><small>Only choose new image to replace the existing one.</small></span>
   
   @error('image')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
