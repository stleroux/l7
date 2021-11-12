{{-- reasonToRegister --}}

<div class="form-group">

{{--    <label for="reasonToRegister" class="{{ $required ?? '' }}">
      {{ $label ?? 'Reason To Register' }}
   </label> --}}
   
   @if(Route::currentRouteName('') == 'admin.users.show')

      <div class="p-1 m-0 bg-gray-light">
         {!! $user->reasonToRegister !!}
      </div>

   @else

      <textarea name="reasonToRegister" id="reasonToRegister" class="form-control form-control-sm @error('reasonToRegister') is-invalid @enderror">{{ old('reasonToRegister') ?? $user->reasonToRegister }}</textarea>
      {{-- <input
         type="text"
         name="reasonToRegister"
         id="reasonToRegister"
         class="form-control form-control-sm @error('reasonToRegister') is-invalid @enderror"
         value="{{ old('reasonToRegister') ?? $user->reasonToRegister }}"
         placeholder="Reason To Register"
         data-inputmask=""
         {{ $disabled ?? '' }}
      > --}}

   @endif
   
   @error('reasonToRegister')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
