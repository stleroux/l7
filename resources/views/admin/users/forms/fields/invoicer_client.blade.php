{{-- INVOICER CLIENT --}}

<div class="form-group">
	
   <label for="invoicer_client" class="{{ $required ?? '' }}">
   	{{ $label ?? 'Invoicer Client' }}
   </label>
   
   <br />
   
   @if(Route::currentRouteName('') == 'admin.users.show')

      <div class="p-1 m-0 bg-gray-light">
         {{-- {!! $user->invoicer_client !!} --}}
         {{ ($user->invoicer_client) ? 'Yes' : 'No' }}
      </div>

   @else

		<input
		   type="checkbox"
		   name="invoicer_client"
		   id="invoicer_client"
		   class="form-check-input"
		   data-bootstrap-switch
		   data-off-color="danger"
		   data-off-text="No"
		   data-on-color="success"
		   data-on-text="Yes"
		   placeholder="Invoicer Client"
		   data-inputmask=""
		   @if($user->invoicer_client || old('invoicer_client')) checked @endif
		   {{ $disabled ?? '' }}
		   {{ $readonly ?? '' }}
		/>

	@endif

	@error('invoicer_client')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
