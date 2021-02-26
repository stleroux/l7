<!-- INCOME TAX RATE -->

{{-- <div class="col-12 col-sm-6">

   <div class="card">
      <div class="card-body p-2">

         <div class="form-group">

            <label for="incomeTaxRate" class="{{ $required ?? '' }}">
               {{ $label ?? 'Income Tax Rate' }}
            </label>
            
            <input
               type="text"
               name="incomeTaxRate"
               id="incomeTaxRate"
               class="form-control @error('incomeTaxRate') is-invalid @enderror"
               value="{{ old('incomeTaxRate') ?? Config::get('invoicer.incomeTaxRate') }}"
               placeholder="incomeTaxRate"
               data-inputmask=""
            />
            <small></small>
            
            @error('incomeTaxRate')
               <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
               </span>
            @enderror

         </div>

      </div>
   </div>
   
</div> --}}


<tr class="row">
   
   <th class="col-5 col-sm-3">
      Income Tax Rate
   </td>

   <td class="col-7 col-sm-3">
      <input
         type="text"
         name="incomeTaxRate"
         id="incomeTaxRate"
         class="form-control form-control-sm @error('incomeTaxRate') is-invalid @enderror"
         value="{{ old('incomeTaxRate') ?? Config::get('invoicer.incomeTaxRate') }}"
         placeholder="incomeTaxRate"
         data-inputmask=""
      />
   </td>

   <td class="col-sm-6 d-none d-md-table-cell">

   </td>

</tr>
