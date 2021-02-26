{{-- FAX --}}

<div class="form-group">

   <label for="fax" class="{{ $required ?? '' }}">
      {{ $label ?? 'Fax Number' }}
   </label>
   
   @if(Route::currentRouteName('') == 'admin.users.show')

      <div class="p-1 m-0 bg-gray-light">
         {!! $user->fax !!}
      </div>

   @else

      <input
         type="text"
         name="fax"
         id="fax"
         class="form-control @error('fax') is-invalid @enderror"
         value="{{ old('fax') ?? $user->fax }}"
         placeholder="Fax Number"
         data-inputmask="'mask': '(999) 999-9999'"
         {{ $disabled ?? '' }}
      />
   
   @endif

   @error('fax')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
