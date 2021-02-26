<!-- NOTE -->

<div class="form-group">

   <label for="notes" class="{{ $required ?? '' }}">
      {{ $label ?? 'Notes' }}
   </label>
   
   @if(Route::currentRouteName('') == 'admin.users.show')

      <div class="p-1 m-0 bg-gray-light">
         {!! $user->notes !!}
      </div>

   @else

      <textarea
      	name="notes"
      	id="notes"
      	class="form-control"
      	rows="2"
      	data-autosize
      	placeholder="Notes"
         data-inputmask=""
         {{ $disabled ?? '' }}>{{ old('notes') ?? $user->notes }}</textarea>

   @endif

   @error('notes')
      <div class="text-danger" role="alert">
         <small>{{ $message }}</small>
      </div>
   @enderror

</div>
