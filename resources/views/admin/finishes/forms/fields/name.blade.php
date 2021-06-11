<!-- NAME -->
<div class="col-12 col-md-3">
   
   <div class="form-group">
      
      <label for="name" class="required">Finish Name</label>
      
      @if(Route::currentRouteName('') == 'admin.finishes.show')

         <div class="p-1 m-0 bg-gray-light">
            {!! $finish->name ?? 'N/A' !!}
         </div>

      @else

         <input
            type="text"
            name="name"
            id="name"
            class="form-control form-control-sm required @error('name') is-invalid @enderror"
            value="{{ old('name') ?? $finish->name }}"
            autofocus
         >

      @endif
      
      @error('name')
         <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
         </span>
      @enderror

   </div>
   
</div>