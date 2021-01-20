<!-- CITY -->

<div class="col-12 col-sm-6">

   <div class="card">
      <div class="card-body p-2">

         <div class="form-group">

            <label for="city" class="{{ $required ?? '' }}">
               {{ $label ?? 'City' }}
            </label>
            
            <input
               type="text"
               name="city"
               id="city"
               class="form-control @error('city') is-invalid @enderror"
               value="{{ old('city') ?? Config::get('invoicer.city') }}"
               placeholder="city"
               data-inputmask=""
            />
            <small>City</small>
            
            @error('city')
               <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
               </span>
            @enderror

         </div>

      </div>
   </div>
   
</div>
