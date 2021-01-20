<!-- APP URL -->

<div class="col-12 col-sm-6">
   <div class="card">
      <div class="card-body p-2">

         <div class="form-group">

            <label for="appURL" class="{{ $required ?? '' }}">
               {{ $label ?? 'App URL' }}
            </label>
            
            <input
               type="text"
               name="appURL"
               id="appURL"
               class="form-control @error('appURL') is-invalid @enderror"
               value="{{ old('appURL') ?? Config::get('settings.appURL') }}"
               placeholder="appURL"
               data-inputmask=""
            />
            <small>The full web address of the application</small>
            
            @error('appURL')
               <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
               </span>
            @enderror

         </div>

      </div>
   </div>
</div>
