<!-- PUBLISH DATE -->

{{-- @if(checkperm('recipe_publish')) --}}
{{-- <div class="form-group">

   <label for="published_at" class="{{ $required ?? '' }}">
      {{ $label ?? 'Published On' }}
   </label>
   
   <div class="input-group input-group-sm">
	   <input
	      type="text"
	      name="published_at"
	      id="datePicker"
	      class="form-control @error('published_at') is-invalid @enderror"
	      value="{{ old('published_at') ?? $post->published_at }}"
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

</div> --}}
{{-- @endif --}}

   
      <div class="form-group {{ $errors->has('published_at') ? 'has-error' : '' }}">
         {{-- {{ Form::label('published_at', 'Publish(ed) On') }} --}}
         <label for="published_at">Publish(ed) On</label>
         <div class="input-group input-group-sm">
            <input type="text" name="published_at" value="{{ old('published_at') ?? $post->published_at }}" class="form-control form-control-sm" id="datePicker" />
            <div class="input-group-append">
               <span class="input-group-text input-group-text-sm"><i class="far fa-calendar-alt"></i></span>
            </div>
         </div>
         <div class="pl-1 bg-danger">{{ $errors->first('published_at') }}</div>
      </div>
   