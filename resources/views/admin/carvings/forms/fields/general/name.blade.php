<!-- NAME -->

<div class="col-xs-12 col-sm-6">
   
   <div class="form-group">
      
      <label for="name" class="required">Carving Name</label>
      
         @if(Route::currentRouteName('') == 'admin.carvings.show')

            <div class="p-1 m-0 bg-gray-light">
               {!! $carving->name ?? 'N/A' !!}
            </div>
   
         @else

            <input
               type="text"
               name="name"
               id="name"
               class="form-control form-control-sm required @error('name') is-invalid @enderror"
               value="{{ old('name') ?? $carving->name }}"
               autofocus
               onfocus="this.focus();this.select()">
            
            @error('name')
               <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
               </span>
            @enderror

         @endif

   </div>
   
</div>
