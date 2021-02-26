{{-- CELL NUMBER --}}

<div class="form-group">

   <label for="cell" class="{{ $required ?? '' }}">
      {{ $label ?? 'Cell Number' }}
   </label>
   
   @if(Route::currentRouteName('') == 'admin.users.show')

      <div class="p-1 m-0 bg-gray-light">
         {!! $user->cell !!}
      </div>

   @else

      <input
         type="text"
         name="cell"
         id="cell"
         class="form-control @error('cell') is-invalid @enderror"
         value="{{ old('cell') ?? $user->cell }}"
         placeholder="Cell Number"
         data-inputmask="'mask': '(999) 999-9999'"
         {{ $disabled ?? '' }}
      />

   @endif
   
   @error('cell')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
