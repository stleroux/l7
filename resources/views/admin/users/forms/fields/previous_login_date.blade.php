{{-- PREVIOUS LOGIN DATE --}}

<div class="form-group">

   <label for="previous_login_date" class="{{ $required ?? '' }}">
      {{ $label ?? 'Previous Login Date' }}
   </label>
   
   @if(Route::currentRouteName('') == 'admin.users.show' || Route::currentRouteName('') == 'admin.users.edit')

      <div class="p-1 m-0 bg-gray-light">
         {!! $user->previous_login_date !!}
      </div>

   @else

      <input
      	type="text"
      	name="previous_login_date"
      	id="previous_login_date"
      	value="{{ old('previous_login_date') ?? $user->previous_login_date }}"
      	class="form-control @error('previous_login_date') is-invalid @enderror"
         placeholder="Previous Login Date"
         data-inputmask=""
         {{ $disabled ?? '' }}
      />

   @endif
   
   @error('previous_login_date')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
