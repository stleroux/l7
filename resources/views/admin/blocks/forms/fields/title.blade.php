<!-- TITLE -->

<div class="form-group">

   <label for="title" class="{{ $required ?? '' }}">
      {{ $label ?? 'Title' }}
   </label>
   
   @if(Route::currentRouteName('') == 'admin.blocks.show')

      <div class="p-1 m-0 bg-gray-light">
         {!! $block->title ?? 'N/A' !!}
      </div>
   
   @else
   
      <input
         type="text"
         name="title"
         id="title"
         class="form-control form-control-sm @error('title') is-invalid @enderror"
         value="{{ old('title') ?? $block->title }}"
         placeholder="Title"
         data-inputmask=""
         autofocus
         onfocus="this.focus();this.select()"
      />   
   
   @endif
   
   @error('title')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>