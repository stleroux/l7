<!-- NAME -->

<div class="col-xs-12 col-sm-4">
   
   <div class="form-group">
      
      <label for="name" class="required">Name</label>

      @if(Route::currentRouteName('') == 'admin.offerings.show')

         <div class="p-1 m-0 bg-gray-light">
            {!! $offering->name !!}
         </div>

      @else
      
         <input
            type="text"
            name="name"
            id="name"
            class="form-control form-control-sm required @error('name') is-invalid @enderror"
            value="{{ old('name') ?? $offering->name }}"
            autofocus
            onfocus="this.focus();this.select()">
            
      @endif
      
      @error('name')
         <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
         </span>
      @enderror

   </div>
   
</div>
