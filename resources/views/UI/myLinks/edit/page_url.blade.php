<!-- PAGE URL -->

<div class="form-group">

   <label for="title" class="{{ $required ?? '' }}">
      {{ $label ?? 'Page URL' }}
   </label>
   
   <input
      type="text"
      name="page_url"
      id="page_url"
      class="form-control form-control-sm @error('page_url') is-invalid @enderror"
      value="{{ old('page_url') ?? $mylink->page_url }}"
      placeholder="Title"
      data-inputmask=""
   />
   
   @error('title')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>