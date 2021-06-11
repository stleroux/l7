<!-- UPC CODE -->
<div class="col-12 col-md-3">
   
   <div class="form-group">
      
      <label for="upc" class="">UPC Code</label>
      
      @if(Route::currentRouteName('') == 'admin.finishes.show')

         <div class="p-1 m-0 bg-gray-light">
            {!! $finish->upc ?? 'N/A' !!}
         </div>

      @else
      
         <input
            type="text"
            name="upc"
            id="upc"
            class="form-control form-control-sm @error('upc') is-invalid @enderror"
            value="{{ old('upc') ?? $finish->upc }}"
            autofocus
         >

      @endif
      
      @error('upc')
         <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
         </span>
      @enderror

   </div>
   
</div>