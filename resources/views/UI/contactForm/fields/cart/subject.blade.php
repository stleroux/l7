<div class="form-group">
   <label for="subject" class="required">Subjet</label>
   <input
      id="subject"
      name="subject"
      class="form-control form-control-sm @error('subject') is-invalid @enderror"
      autofocus="autofocus"
      {{-- value="{{ old('subject') }}" --}}
      
      readonly
      value="Contact from Quote Request"
   />
   @error('subject')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror
</div>
