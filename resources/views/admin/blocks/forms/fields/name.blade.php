<!-- NAME -->

<div class="form-group">

   <label for="name" class="{{ $required ?? '' }}">
      {{ $label ?? 'Name' }}
   </label>
   
   @if(Route::currentRouteName('') == 'admin.blocks.show' || Route::currentRouteName('') == 'admin.blocks.edit')

      <div class="p-1 m-0 bg-gray-light">
         {{ $block->name ?? 'N/A' }}
      </div>
      <input type="hidden" name="name" value="{{ old('name') ?? $block->name }}">

   @else

      <input
         type="text"
         name="name"
         id="name"
         class="form-control form-control-sm @error('name') is-invalid @enderror"
         value="{{ old('name') ?? $block->name }}"
         placeholder="Name"
         data-inputmask=""
      />

   @endif
   
   @error('name')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>