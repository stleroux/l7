<!-- HST NO -->

<div class="col-12 col-sm-6">

   <div class="card">
      <div class="card-body p-2">

         <div class="form-group">

            <label for="hstNo" class="{{ $required ?? '' }}">
               {{ $label ?? 'HST No' }}
            </label>
            
            <input
               type="text"
               name="hstNo"
               id="hstNo"
               class="form-control @error('hstNo') is-invalid @enderror"
               value="{{ old('hstNo') ?? Config::get('invoicer.hstNo') }}"
               placeholder="hstNo"
               data-inputmask=""
            />
            <small>HST No</small>
            
            @error('hstNo')
               <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
               </span>
            @enderror

         </div>

      </div>
   </div>
   
</div>
