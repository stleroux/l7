<!-- WSIB NO -->

<div class="col-12 col-sm-6">

   <div class="card">
      <div class="card-body p-2">

         <div class="form-group">

            <label for="wsibNo" class="{{ $required ?? '' }}">
               {{ $label ?? 'WSIB No' }}
            </label>
            
            <input
               type="text"
               name="wsibNo"
               id="wsibNo"
               class="form-control @error('wsibNo') is-invalid @enderror"
               value="{{ old('wsibNo') ?? Config::get('invoicer.wsibNo') }}"
               placeholder="wsibNo"
               data-inputmask=""
            />
            <small>WSIB No</small>
            
            @error('wsibNo')
               <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
               </span>
            @enderror

         </div>

      </div>
   </div>
   
</div>
