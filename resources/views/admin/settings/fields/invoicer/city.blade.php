<!-- CITY -->

{{-- <div class="col-12 col-sm-6">

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
            <small></small>
            
            @error('city')
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
      City
   </td>

   <td class="col-7 col-sm-3">
      <input
         type="text"
         name="city"
         id="city"
         class="form-control form-control-sm @error('city') is-invalid @enderror"
         value="{{ old('city') ?? Config::get('invoicer.city') }}"
         placeholder="city"
         data-inputmask=""
      />
   </td>

   <td class="col-sm-6 d-none d-md-table-cell">

   </td>

</tr>
