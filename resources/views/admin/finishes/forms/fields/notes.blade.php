<!-- NOTES -->
<div class="col-12">
   
   <div class="form-group">
      
      <label for="name" class="">Notes</label>
      
      @if(Route::currentRouteName('') == 'admin.finishes.show')

	      <div class="p-1 m-0 bg-gray-light">
	         {!! $finish->notes !!}
	      </div>

	   @else

      	<textarea name="notes" id="notes" class="form-control form-control-sm">{{ old('notes') ?? $finish->notes }}</textarea>

      @endif
      
      @error('notes')
         <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
         </span>
      @enderror

   </div>
   
</div>
