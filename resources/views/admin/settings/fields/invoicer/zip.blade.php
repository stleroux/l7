<!-- ZIP -->

<div class="col-12 col-sm-6">

   <div class="card">
      <div class="card-body p-2">

         <div class="form-group">

            <label for="zip" class="{{ $required ?? '' }}">
               {{ $label ?? 'Postal Code' }}
            </label>
            
            <input
               type="text"
               name="zip"
               id="zip"
               class="form-control @error('zip') is-invalid @enderror"
               value="{{ old('zip') ?? Config::get('invoicer.zip') }}"
               placeholder="zip"
               data-inputmask=""
            />
            <small>Postal Code</small>
            
            @error('zip')
               <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
               </span>
            @enderror

         </div>

      </div>
   </div>
   
</div>
