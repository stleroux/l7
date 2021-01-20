<!-- WEBSITE -->

<div class="col-12 col-sm-6">

   <div class="card">
      <div class="card-body p-2">

         <div class="form-group">

            <label for="website" class="{{ $required ?? '' }}">
               {{ $label ?? 'Website Address' }}
            </label>
            
            <input
               type="text"
               name="website"
               id="website"
               class="form-control @error('website') is-invalid @enderror"
               value="{{ old('website') ?? Config::get('invoicer.website') }}"
               placeholder="website"
               data-inputmask=""
            />
            <small>Website Address</small>
            
            @error('website')
               <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
               </span>
            @enderror

         </div>

      </div>
   </div>
   
</div>
