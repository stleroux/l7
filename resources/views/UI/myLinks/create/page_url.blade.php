<!-- PAGE URL -->

<div class="form-group">

   <label for="page_url" class="{{ $required ?? '' }}">
      {{ $label ?? 'Page URL' }}
   </label>
   
   <input
      type="text"
      name="page_url"
      id="page_url"
      class="form-control form-control-sm @error('page_url') is-invalid @enderror"
      value="{{ old('page_url') }}"
      placeholder="Page URL"
      data-inputmask=""
   />
   
   @error('page_url')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>