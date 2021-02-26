{{-- LAST LOGIN DATE --}}

<div class="form-group">

   <label for="last_login_date" class="{{ $required ?? '' }}">
      {{ $label ?? 'Last Login Date' }}
   </label>
   
   @if(Route::currentRouteName('') == 'admin.users.show' || Route::currentRouteName('') == 'admin.users.edit')

      <div class="p-1 m-0 bg-gray-light">
         {!! $user->last_login_date !!}
      </div>

   @else

      <input
      	type="text"
      	name="last_login_date"
      	id="last_login_date"
      	value="{{ old('last_login_date') ?? $user->last_login_date }}"
      	class="form-control @error('last_login_date') is-invalid @enderror"
         placeholder="Last Login Date"
         data-inputmask=""
         {{ $disabled ?? '' }}
      />

   @endif
   
   @error('last_login_date')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
