<!-- NAME -->

<div class="form-group">

   <label for="name" class="{{ $required ?? '' }}">
      {{ $label ?? 'Name' }}
   </label>
   
   <input
      type="text"
      name="name"
      id="name"
      class="form-control form-control-sm @error('name') is-invalid @enderror"
      value="{{ old('name') ?? $mylink->name }}"
      placeholder="Name"
      data-inputmask=""
      autofocus
      onfocus="this.focus();this.select()"
   />
   
   @error('name')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>