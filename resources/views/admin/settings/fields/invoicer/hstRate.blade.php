<!-- HST RATE -->

<div class="col-12 col-sm-6">

   <div class="card">
      <div class="card-body p-2">

         <div class="form-group">

            <label for="hstRate" class="{{ $required ?? '' }}">
               {{ $label ?? 'HST Rate' }}
            </label>
            
            <input
               type="text"
               name="hstRate"
               id="hstRate"
               class="form-control @error('hstRate') is-invalid @enderror"
               value="{{ old('hstRate') ?? Config::get('invoicer.hstRate') }}"
               placeholder="HST Rate"
               data-inputmask=""
            />
            <small>HST Rate</small>
            
            @error('hstRate')
               <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
               </span>
            @enderror

         </div>

      </div>
   </div>
   
</div>
