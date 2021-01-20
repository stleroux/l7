<!-- INVOICER VERSION NO -->

<div class="col-12 col-sm-6">

   <div class="card">
      <div class="card-body p-2">

         <div class="form-group">

            <label for="version" class="{{ $required ?? '' }}">
               {{ $label ?? 'Version No' }}
            </label>
            
            <input
               type="text"
               name="version"
               id="version"
               class="form-control @error('version') is-invalid @enderror"
               value="{{ old('version') ?? Config::get('invoicer.version') }}"
               placeholder="version"
               data-inputmask=""
            />
            <small>Version number</small>
            
            @error('version')
               <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
               </span>
            @enderror

         </div>

      </div>
   </div>
   
</div>
