{{-- WEBSITE --}}

<div class="form-group">

   <label for="website" class="{{ $required ?? '' }}">
      {{ $label ?? 'Website Address' }}
   </label>
   
   @if(Route::currentRouteName('') == 'admin.users.show')

      <div class="p-1 m-0 bg-gray-light">
         {!! $user->website !!}
      </div>

   @else

      <input
      	type="text"
      	name="website"
      	id="website"
      	class="form-control @error('website') is-invalid @enderror"
      	value="{{ old('website') ?? $user->website }}"
         placeholder="Website Address"
         data-inputmask=""
         {{ $disabled ?? '' }}
      />

   @endif
   
   @error('website')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
