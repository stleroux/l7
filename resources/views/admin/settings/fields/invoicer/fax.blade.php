<!-- FAX -->

{{-- <div class="col-12 col-sm-6">

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
            <small></small>
            
            @error('fax')
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
      Fax
   </td>

   <td class="col-7 col-sm-3">
      <input
         type="text"
         name="fax"
         id="fax"
         class="form-control form-control-sm @error('fax') is-invalid @enderror"
         value="{{ old('fax') ?? Config::get('invoicer.fax') }}"
         placeholder="fax"
         data-inputmask=""
      />
   </td>

   <td class="col-sm-6 d-none d-md-table-cell">

   </td>

</tr>
