<!-- STATE -->

{{-- <div class="col-12 col-sm-6">

   <div class="card">
      <div class="card-body p-2">

         <div class="form-group">

            <label for="state" class="{{ $required ?? '' }}">
               {{ $label ?? 'Province' }}
            </label>
            
            <input
               type="text"
               name="state"
               id="state"
               class="form-control @error('state') is-invalid @enderror"
               value="{{ old('state') ?? Config::get('invoicer.state') }}"
               placeholder="state"
               data-inputmask=""
            />
            <small></small>
            
            @error('state')
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
      Province
   </td>

   <td class="col-7 col-sm-3">
      <input
         type="text"
         name="state"
         id="state"
         class="form-control form-control-sm @error('state') is-invalid @enderror"
         value="{{ old('state') ?? Config::get('invoicer.state') }}"
         placeholder="state"
         data-inputmask=""
      />
   </td>

   <td class="col-sm-6 d-none d-md-table-cell">

   </td>

</tr>
