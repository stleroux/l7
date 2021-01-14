<!-- INVOICER VERSION NO -->

<div class="form-group">

   <label for="invoicerVersionNo" class="{{ $required ?? '' }}">
      {{ $label ?? 'Invoicer Version No' }}
   </label>
   
   <input
      type="text"
      name="invoicerVersionNo"
      id="invoicerVersionNo"
      class="form-control @error('invoicerVersionNo') is-invalid @enderror"
      value="{{ old('invoicerVersionNo') ?? Config::get('settings.invoicerVersionNo') }}"
      placeholder="invoicerVersionNo"
      data-inputmask=""
   />
   <small>Invoicer version number</small>
   
   @error('invoicerVersionNo')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>