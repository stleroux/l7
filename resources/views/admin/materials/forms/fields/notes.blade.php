{{-- NOTES --}}

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
   
   <div class="form-group">
      
      <label for="notes" class="">Notes</label>
      
      @if(Route::currentRouteName('') == 'admin.materials.show')

	      <div class="p-1 m-0 bg-gray-light">
	         {!! $material->notes ?? 'N/A' !!}
	      </div>

	   @else

	      <textarea name="notes" id="notes" rows="3" class="form-control form-control-sm @error('notes') is-invalid @enderror">{{ old('notes') ?? $material->notes }}</textarea>

	   @endif
      
      @error('notes')
         <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
         </span>
      @enderror

   </div>
   
</div>
