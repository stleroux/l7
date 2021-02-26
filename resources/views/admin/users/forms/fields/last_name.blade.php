{{-- LAST NAME --}}

<div class="form-group">

   <label for="last_name" class="{{ $required ?? '' }}">
      {{ $label ?? 'Last Name' }}
   </label>
   
   @if(Route::currentRouteName('') == 'admin.users.show')

      <div class="p-1 m-0 bg-gray-light">
         {!! $user->last_name !!}
      </div>

   @else

      <input
         type="text"
         name="last_name"
         id="last_name"
         class="form-control @error('last_name') is-invalid @enderror"
         value="{{ old('last_name') ?? $user->last_name }}"
         placeholder="Last name"
         data-inputmask=""
         {{ $disabled ?? '' }}
      />

   @endif
   
   @error('last_name')
      <span class="invalid-feedback d-inline" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
