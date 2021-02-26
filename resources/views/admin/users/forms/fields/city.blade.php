{{-- CITY --}}

<div class="form-group">

   <label for="city" class="{{ $required ?? '' }}">
      {{ $label ?? 'City' }}
   </label>
   
   @if(Route::currentRouteName('') == 'admin.users.show')

      <div class="p-1 m-0 bg-gray-light">
         {!! $user->city !!}
      </div>

   @else

      <input
         type="text"
         name="city"
         id="city"
         class="form-control @error('city') is-invalid @enderror"
         value="{{ old('city') ?? $user->city }}"
         placeholder="City"
         data-inputmask=""
         {{ $disabled ?? '' }}
      />

   @endif
   
   @error('city')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
