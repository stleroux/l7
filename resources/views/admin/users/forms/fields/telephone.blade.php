{{-- TELEPHONE --}}

<div class="form-group">

   <label for="telephone" class="{{ $required ?? '' }}">
      {{ $label ?? 'Phone Number' }}
   </label>
   
   @if(Route::currentRouteName('') == 'admin.users.show')

      <div class="p-1 m-0 bg-gray-light">
         {!! $user->telephone !!}
      </div>

   @else

      <input
      	type="text"
      	name="telephone"
      	id="telephone"
      	class="form-control @error('telephone') is-invalid @enderror"
      	value="{{ old('telephone') ?? $user->telephone }}"
         placeholder="Phone Number"
         data-inputmask="'mask': '(999) 999-9999'"
         {{ $disabled ?? '' }}
      />

   @endif
   
   @error('telephone')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
