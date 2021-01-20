<!-- ADDRESS 2 -->

<div class="col-12 col-sm-6">

   <div class="card">
      <div class="card-body p-2">

         <div class="form-group">

            <label for="address_2" class="{{ $required ?? '' }}">
               {{ $label ?? 'Address 2' }}
            </label>
            
            <input
               type="text"
               name="address_2"
               id="address_2"
               class="form-control @error('address_2') is-invalid @enderror"
               value="{{ old('address_2') ?? Config::get('invoicer.address_2') }}"
               placeholder="address_2"
               data-inputmask=""
            />
            <small>Address 2</small>
            
            @error('address_2')
               <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
               </span>
            @enderror

         </div>

      </div>
   </div>
   
</div>
