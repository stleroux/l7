<!-- RESOLUTION -->

<div class="form-group">

   <label for="resolution" class="{{ $required ?? '' }}">
      {{ $label ?? 'Resolution' }}
   </label>
   
    @if(Route::currentRouteName('') == 'admin.features.show')

      <div class="p-1 m-0 bg-gray-light">
         {!! $feature->resolution ?? 'N/A' !!}
      </div>

   @else

      <textarea
      	name="resolution"
      	id="resolution"
      	rows="8"
      	class="simple form-control form-control-sm @error('resolution') is-invalid @enderror">{{ old('resolution') ?? $feature->resolution }}</textarea>

   @endif
   
   @error('resolution')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>