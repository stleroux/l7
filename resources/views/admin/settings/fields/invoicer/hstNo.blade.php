<!-- HST NO -->

{{-- <div class="col-12 col-sm-6">

   <div class="card">
      <div class="card-body p-2">

         <div class="form-group">

            <label for="hstNo" class="{{ $required ?? '' }}">
               {{ $label ?? 'HST No' }}
            </label>
            
            <input
               type="text"
               name="hstNo"
               id="hstNo"
               class="form-control @error('hstNo') is-invalid @enderror"
               value="{{ old('hstNo') ?? Config::get('invoicer.hstNo') }}"
               placeholder="hstNo"
               data-inputmask=""
            />
            <small></small>
            
            @error('hstNo')
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
      HST No
   </td>

   <td class="col-7 col-sm-3">
      <input
         type="text"
         name="hstNo"
         id="hstNo"
         class="form-control form-control-sm @error('hstNo') is-invalid @enderror"
         value="{{ old('hstNo') ?? Config::get('invoicer.hstNo') }}"
         placeholder="hstNo"
         data-inputmask=""
      />
   </td>

   <td class="col-sm-6 d-none d-md-table-cell">

   </td>

</tr>
