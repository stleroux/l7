{{-- CELL NUMBER --}}

<div class="form-group">

   <label for="cell" class="{{ $required ?? '' }}">
      {{ $label ?? 'Cell Number' }}
   </label>
   
   <input
      type="text"
      name="cell"
      id="cell"
      class="form-control @error('cell') is-invalid @enderror"
      value="{{ old('cell') ?? $user->cell }}"
      placeholder="Cell Number"
      data-inputmask="'mask': '(999) 999-9999'"
   />
   
   @error('cell')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
