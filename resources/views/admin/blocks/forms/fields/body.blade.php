<!-- BODY -->

<div class="form-group">

   <label for="body" class=" {{ $required ?? '' }}">
      {{ $label ?? 'body' }}
   </label>
   
   @if(Route::currentRouteName('') == 'admin.blocks.show')

      <div class="p-1 m-0 bg-gray-light">
         {!! $block->body ?? 'N/A' !!}
      </div>

   @else

      <textarea
      	name="body"
      	id="body"
      	rows="8"
      	class="simple form-control form-control-sm @error('body') is-invalid @enderror">{{ old('body') ?? $block->body }}</textarea>

   @endif
   
   @error('body')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>