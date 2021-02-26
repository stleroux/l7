{{-- PROVINCE --}}

<div class="form-group">

   <label for="province" class="{{ $required ?? '' }}">
      {{ $label ?? 'Province' }}
   </label>
   
   @if(Route::currentRouteName('') == 'admin.users.show')

      <div class="p-1 m-0 bg-gray-light">
         {!! $user->province !!}
      </div>

   @else

      <input
      	type="text"
      	name="province"
      	id="province"
      	class="form-control @error('province') is-invalid @enderror"
      	value="{{ old('province') ?? $user->province }}"
         placeholder="Province"
         data-inputmask=""
         {{ $disabled ?? '' }}
      />

   @endif
   
   @error('province')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
