<!-- DESCRIPTION -->

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
   
   <div class="form-group">
      
      <label for="description" class="required">Carving Description</label>
      
      @if(Route::currentRouteName('') == 'admin.carvings.show')

         <div class="p-1 m-0 bg-gray-light">
            {!! $carving->description ?? 'N/A' !!}
         </div>

      @else

         <textarea name="description" id="description" rows="3" class="form-control form-control-sm @error('description') is-invalid @enderror">{{ old('description') ?? $carving->description }}</textarea>
         
         @error('description')
            <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
            </span>
         @enderror

      @endif

   </div>
   
</div>
