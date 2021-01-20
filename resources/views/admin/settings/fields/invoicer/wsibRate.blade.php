<!-- WSIB RATE -->

<div class="col-12 col-sm-6">

   <div class="card">
      <div class="card-body p-2">

         <div class="form-group">

            <label for="wsibRate" class="{{ $required ?? '' }}">
               {{ $label ?? 'WSIB Rate' }}
            </label>
            
            <input
               type="text"
               name="wsibRate"
               id="wsibRate"
               class="form-control @error('wsibRate') is-invalid @enderror"
               value="{{ old('wsibRate') ?? Config::get('invoicer.wsibRate') }}"
               placeholder="wsibRate"
               data-inputmask=""
            />
            <small>WSIB Rate</small>
            
            @error('wsibRate')
               <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
               </span>
            @enderror

         </div>

      </div>
   </div>
   
</div>
