<!-- APPNAME -->

<div class="form-group">

   <label for="appName" class="{{ $required ?? '' }}">
      {{ $label ?? 'App Name' }}
   </label>
   
   <input
      type="text"
      name="appName"
      id="appName"
      class="form-control @error('appName') is-invalid @enderror"
      value="{{ old('appName') ?? Config::get('settings.appName') }}"
      placeholder="appName"
      data-inputmask=""
   />
   <small>The name of the application as it will apppear throughout the site</small>
   
   @error('appName')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>