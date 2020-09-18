<!-- PUBLISH DATE -->

{{-- @if(checkperm('recipe_publish')) --}}
<div class="form-group">

   <label for="published_at" class="{{ $required ?? '' }}">
      {{ $label ?? 'Published On' }}
   </label>
   
   <div class="input-group input-group-sm">
	   <input
	      type="text"
	      name="published_at"
	      id="datePicker"
	      class="form-control @error('published_at') is-invalid @enderror"
	      value="{{ old('published_at') ?? $recipe->published_at }}"
	      placeholder="Published On"
	      data-inputmask=""
         autocomplete="off"
	   />
	   <div class="input-group-append">
         <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
      </div>
   </div>
   
   @error('published_at')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
{{-- @endif --}}
