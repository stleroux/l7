<!-- COMPANY NAME -->

<div class="col-12 col-sm-6">

   <div class="card">
      <div class="card-body p-2">

         <div class="form-group">

            <label for="companyName" class="{{ $required ?? '' }}">
               {{ $label ?? 'Company Name' }}
            </label>
            
            <input
               type="text"
               name="companyName"
               id="companyName"
               class="form-control @error('companyName') is-invalid @enderror"
               value="{{ old('companyName') ?? Config::get('invoicer.companyName') }}"
               placeholder="companyName"
               data-inputmask=""
            />
            <small>The name of the Invoicer application as it will apppear throughout</small>
            
            @error('companyName')
               <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
               </span>
            @enderror

         </div>

      </div>
   </div>
   
</div>
