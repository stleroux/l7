{{-- ADDRESS 1 --}}

<div class="form-group">

   <label for="address_1" class="{{ $required ?? '' }}">
      {{ $label ?? 'Address 1' }}
   </label>
   
   @if(Route::currentRouteName('') == 'admin.users.show')

      <div class="p-1 m-0 bg-gray-light">
         {!! $user->address_1 !!}
      </div>

   @else

      <input
         type="text"
         name="address_1"
         id="address_1"
         class="form-control @error('address_1') is-invalid @enderror"
         value="{{ old('address_1') ?? $user->address_1 }}"
         placeholder="Address"
         data-inputmask=""
         {{ $disabled ?? '' }}
      >

   @endif
   
   @error('address_1')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
