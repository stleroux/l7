{{-- MEMBER SINCE DATE --}}

<div class="form-group">

   <label for="created_at" class="{{ $required ?? '' }}">
      {{ $label ?? 'Member Since' }}
   </label>
   
   @if(Route::currentRouteName('') == 'admin.users.show' || Route::currentRouteName('') == 'admin.users.edit')

      <div class="p-1 m-0 bg-gray-light">
         {!! $user->created_at !!}
      </div>

   @else

      <input
      	type="text"
      	name="created_at"
      	id="created_at"
      	value="{{ old('created_at') ?? $user->created_at->format('F Y') }}"
      	class="form-control @error('created_at') is-invalid @enderror"
         placeholder="Member Since"
         data-inputmask=""
         {{ $disabled ?? '' }}
      />

   @endif
   
   @error('created_at')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
