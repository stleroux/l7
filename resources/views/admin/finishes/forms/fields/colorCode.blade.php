<!-- COLOR CODE -->
<div class="col-12 col-md-3">
   
   <div class="form-group">
      
      <label for="color_code" class="">Color Code</label>
      
      @if(Route::currentRouteName('') == 'admin.finishes.show')

         <div class="p-1 m-0 bg-gray-light">
            {!! $finish->color_code !!}
         </div>

      @else

         <input
            type="text"
            name="color_code"
            id="color_code"
            class="form-control form-control-sm @error('color_code') is-invalid @enderror"
            value="{{ old('name') ?? $finish->color_code }}"
            autofocus
         >

      @endif
      
      @error('color_code')
         <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
         </span>
      @enderror

   </div>
   
</div>