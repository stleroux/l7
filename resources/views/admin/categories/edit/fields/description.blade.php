<!-- DESCRIPTION -->
{{-- <div class="col-9">
   <div class="form-group">
      <label for="description">Description</label>
      <input type="text" name="description" class="form-control form-control-sm" value="{{ $category->description }}">
   </div>
</div> --}}

<div class="form-group">

   <label for="description" class="{{ $required ?? '' }}">
      {{ $label ?? 'Description' }}
   </label>
   
   <textarea
   	name="description"
   	id="description"
   	class="form-control"
   	rows="2"
   	data-autosize
   	placeholder="description"
      data-inputmask=""
      {{ $disabled ?? '' }}>{{ old('description') ?? $category->description }}</textarea>

   @error('description')
      <div class="text-danger" role="alert">
         <small>{{ $message }}</small>
      </div>
   @enderror

</div>