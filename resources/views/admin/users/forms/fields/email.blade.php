<!-- EMAIL -->

 <div class="form-group">

   <label for="email" class="{{ $required ?? '' }}">
      {{ $label ?? 'E-Mail' }}
   </label>
   
   @if(Route::currentRouteName('') == 'admin.users.show')

      <div class="p-1 m-0 bg-gray-light">
         {!! $user->email !!}
      </div>

   @else

      <input
         type="text"
         name="email"
         id="email"
         class="form-control @error('email') is-invalid @enderror"
         value="{{ old('email') ?? $user->email }}"
         autofocus
         autocomplete="email"
         placeholder="Email address"
         {{-- data-inputmask="'mask': '*{1,64}@*{1,63}.*{1,63}'" --}}
         {{ $disabled ?? '' }}
      />

   @endif

   @error('email')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror
   
</div>
