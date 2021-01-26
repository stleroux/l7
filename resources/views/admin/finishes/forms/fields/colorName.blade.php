<!-- COLOR NAME -->
<div class="col-12 col-md-3">
   
   <div class="form-group">
      
      <label for="color_name" class="">Color Name</label>
      
      @if(Route::currentRouteName('') == 'admin.finishes.show')

         <div class="p-1 m-0 bg-gray-light">
            {!! $finish->color_name !!}
         </div>

      @else

         <input
            type="text"
            name="color_name"
            id="color_name"
            class="form-control form-control-sm @error('color_name') is-invalid @enderror"
            value="{{ old('color_name') ?? $finish->color_name }}"
            autofocus
         >

      @endif
      
      @error('color_name')
         <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
         </span>
      @enderror

   </div>
   
</div>