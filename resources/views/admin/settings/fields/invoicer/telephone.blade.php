<!-- TELEPHONE -->

<div class="col-12 col-sm-6">

   <div class="card">
      <div class="card-body p-2">

         <div class="form-group">

            <label for="telephone" class="{{ $required ?? '' }}">
               {{ $label ?? 'Telephone No' }}
            </label>
            
            <input
               type="text"
               name="telephone"
               id="telephone"
               class="form-control @error('telephone') is-invalid @enderror"
               value="{{ old('telephone') ?? Config::get('invoicer.telephone') }}"
               placeholder="telephone"
               data-inputmask=""
            />
            <small>Telephone number</small>
            
            @error('telephone')
               <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
               </span>
            @enderror

         </div>

      </div>
   </div>
   
</div>
