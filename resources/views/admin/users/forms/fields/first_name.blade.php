<!-- FIRST NAME -->

<div class="form-group">

   <label for="first_name" class="{{ $required ?? '' }}">
      {{ $label ?? 'First name' }}
   </label>
   
   @if(Route::currentRouteName('') == 'admin.users.show')

      <div class="p-1 m-0 bg-gray-light">
         {!! $user->first_name !!}
      </div>

   @else

      <input
         type="text"
         name="first_name"
         id="first_name"
         class="form-control @error('first_name') is-invalid @enderror"
         value="{{ old('first_name') ?? $user->first_name }}"
         placeholder="First name"
         data-inputmask=""
         {{ $disabled ?? '' }}
      />

   @endif

   @error('first_name')
      <span class="invalid-feedback d-inline" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror
</div>
