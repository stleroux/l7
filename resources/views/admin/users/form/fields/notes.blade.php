<!-- NOTE -->

<div class="form-group">

   <label for="notes" class="{{ $required ?? '' }}">
      {{ $label ?? 'Notes' }}
   </label>
   
   <textarea
   	name="notes"
   	id="notes"
   	class="form-control"
   	rows="2"
   	data-autosize
   	placeholder="Notes"
      data-inputmask=""
      {{ $disabled ?? '' }}>{{ old('notes') ?? $user->notes }}</textarea>

   @error('notes')
      <div class="text-danger" role="alert">
         <small>{{ $message }}</small>
      </div>
   @enderror

</div>
