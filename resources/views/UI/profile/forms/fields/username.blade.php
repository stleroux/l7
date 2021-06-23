<!-- USERNAME -->

<div class="form-group">

   <label for="username" class="{{ $required ?? '' }}">
      {{ $label ?? 'Username' }}
   </label>
   
   {{-- @if(Route::currentRouteName('') == 'admin.users.show') --}}
   @if($user->username)

      <div class="p-1 m-0 bg-gray-light form-control">
         {!! $user->username !!}
      </div>

   @else

      <input
         type="text"
         name="username"
         id="username"
         class="form-control @error('username') is-invalid @enderror"
         value="{{ old('username') ?? $user->username }}"
         placeholder="Username"
         data-inputmask=""
         {{ $disabled ?? '' }}
      />

   @endif

   @error('username')
      <span class="invalid-feedback d-inline" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror
</div>
