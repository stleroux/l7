<!-- FAX -->

<div class="col-12 col-sm-6">

   <div class="card">
      <div class="card-body p-2">

         <div class="form-group">

            <label for="fax" class="{{ $required ?? '' }}">
               {{ $label ?? 'Fax' }}
            </label>
            
            <input
               type="text"
               name="fax"
               id="fax"
               class="form-control @error('fax') is-invalid @enderror"
               value="{{ old('fax') ?? Config::get('invoicer.fax') }}"
               placeholder="fax"
               data-inputmask=""
            />
            <small>Fax number</small>
            
            @error('fax')
               <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
               </span>
            @enderror

         </div>

      </div>
   </div>
   
</div>
