<!-- ADDRESS 1 -->

{{-- <div class="col-12 col-sm-6">

   <div class="card">
      <div class="card-body p-2">

         <div class="form-group">

            <label for="address_1" class="{{ $required ?? '' }}">
               {{ $label ?? 'Address 1' }}
            </label>
            
            <input
               type="text"
               name="address_1"
               id="address_1"
               class="form-control @error('address_1') is-invalid @enderror"
               value="{{ old('address_1') ?? Config::get('invoicer.address_1') }}"
               placeholder="address_1"
               data-inputmask=""
            />
            <small></small>
            
            @error('address_1')
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
      Address 1
   </td>

   <td class="col-7 col-sm-3">
      <input
         type="text"
         name="address_1"
         id="address_1"
         class="form-control form-control-sm @error('address_1') is-invalid @enderror"
         value="{{ old('address_1') ?? Config::get('invoicer.address_1') }}"
         placeholder="address_1"
         data-inputmask=""
      />
   </td>

   <td class="col-sm-6 d-none d-md-table-cell">
      
   </td>

</tr>
