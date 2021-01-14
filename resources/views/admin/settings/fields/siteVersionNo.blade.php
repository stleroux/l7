<!-- SITE VERSION NUMBER -->

<div class="form-group">

   <label for="siteVersionNo" class="{{ $required ?? '' }}">
      {{ $label ?? 'Site Version No' }}
   </label>
   
   <input
      type="text"
      name="siteVersionNo"
      id="siteVersionNo"
      class="form-control @error('siteVersionNo') is-invalid @enderror"
      value="{{ old('siteVersionNo') ?? Config::get('settings.siteVersionNo') }}"
      placeholder="siteVersionNo"
      data-inputmask=""
   />
   <small>Site version number</small>
   
   @error('siteVersionNo')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>