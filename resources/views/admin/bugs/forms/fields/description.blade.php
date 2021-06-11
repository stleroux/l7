<!-- DESCRIPTION -->

<div class="form-group">

   <label for="description" class=" {{ $required ?? '' }}">
      {{ $label ?? 'Description' }}
   </label>
   
   @if(Route::currentRouteName('') == 'admin.bugs.show')

      <div class="p-1 m-0 bg-gray-light">
         {!! $bug->description ?? 'N/A' !!}
      </div>

   @else

      <textarea
      	name="description"
      	id="description"
      	rows="8"
      	class="simple form-control form-control-sm @error('description') is-invalid @enderror">{{ old('description') ?? $bug->description }}</textarea>

   @endif
   
   @error('description')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>