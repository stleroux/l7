<!-- NAME -->
{{-- <div class="col-3">
   <div class="form-group">
      <label for="name" class="required">Name</label>
      <input type="text" name="name" value="{{ $category->name }}" class="form-control form-control-sm" autofocus onfocus="this.focus();this.select()" />
      @error('name')
         <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
         </span>
      @enderror
   </div>
</div> --}}

<div class="form-group">

   <label for="name" class="{{ $required ?? '' }}">
      {{ $label ?? 'Name' }}
   </label>
   
   <input
      type="text"
      name="name"
      id="name"
      class="form-control @error('name') is-invalid @enderror"
      value="{{ old('name') ?? $category->name }}"
      placeholder="Name"
      data-inputmask=""
      {{ $disabled ?? '' }}
   />

   @error('name')
      <span class="invalid-feedback d-inline" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror
</div>