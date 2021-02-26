<!-- HST RATE -->

{{-- <div class="col-12 col-sm-6">

   <div class="card">
      <div class="card-body p-2">

         <div class="form-group">

            <label for="hstRate" class="{{ $required ?? '' }}">
               {{ $label ?? 'HST Rate' }}
            </label>
            
            <input
               type="text"
               name="hstRate"
               id="hstRate"
               class="form-control @error('hstRate') is-invalid @enderror"
               value="{{ old('hstRate') ?? Config::get('invoicer.hstRate') }}"
               placeholder="HST Rate"
               data-inputmask=""
            />
            <small></small>
            
            @error('hstRate')
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
      HST Rate
   </td>

   <td class="col-7 col-sm-3">
      <input
         type="text"
         name="hstRate"
         id="hstRate"
         class="form-control form-control-sm @error('hstRate') is-invalid @enderror"
         value="{{ old('hstRate') ?? Config::get('invoicer.hstRate') }}"
         placeholder="HST Rate"
         data-inputmask=""
      />
   </td>

   <td class="col-sm-6 d-none d-md-table-cell">

   </td>

</tr>
