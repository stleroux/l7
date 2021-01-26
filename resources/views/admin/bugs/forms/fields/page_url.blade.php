<!-- PAGE URL -->

<div class="form-group">

   <label for="title" class="{{ $required ?? '' }}">
      {{ $label ?? 'Page URL' }}
   </label>
   
   @if(Route::currentRouteName('') == 'admin.bugs.show')

      <div class="p-1 m-0 bg-gray-light">
         {{ $bug->page_url }}
      </div>

   @else

      <input
         type="text"
         name="page_url"
         id="page_url"
         class="form-control form-control-sm @error('page_url') is-invalid @enderror"
         value="{{ old('page_url') ?? $bug->page_url }}"
         placeholder="Title"
         data-inputmask=""
      />

   @endif
   
   @error('title')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>