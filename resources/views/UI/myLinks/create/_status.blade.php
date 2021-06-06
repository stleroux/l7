<!-- STATUS -->

<div class="form-group">
   
   <label for="status" class="{{ $required ?? '' }}">
   	Status
   </label>
   
   <input type="text" name="status" value="New" class="form-control form-control-sm" readonly disabled />
   
   @error('status')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>



<!-- TITLE -->
{{-- 
<div class="form-group">

   <label for="title" class="{{ $required ?? '' }}">
      {{ $label ?? 'Title' }}
   </label>
   
   <input
      type="text"
      name="title"
      id="title"
      class="form-control form-control-sm @error('title') is-invalid @enderror"
      value="{{ old('title') }}"
      placeholder="Title"
      data-inputmask=""
      autofocus
      onfocus="this.focus();this.select()"
   />
   
   @error('title')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div> --}}