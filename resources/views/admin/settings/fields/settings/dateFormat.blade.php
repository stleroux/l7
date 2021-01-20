<!-- DATE FORMAT -->

<div class="col-12 col-sm-6">
   
   <div class="card">
      <div class="card-body p-2">

         <div class="form-group">

            <label for="dateFormat" class="{{ $required ?? '' }}">
               {{ $label ?? 'Date Format' }}
            </label>
            
            <input
               type="text"
               name="dateFormat"
               id="dateFormat"
               class="form-control @error('dateFormat') is-invalid @enderror"
               value="{{ old('dateFormat') ?? Config::get('settings.dateFormat') }}"
               placeholder="dateFormat"
               data-inputmask=""
            />
            <small>Use any PHP compatible date format</small>
            
            @error('dateFormat')
               <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
               </span>
            @enderror

         </div>

      </div>
   </div>

</div>
