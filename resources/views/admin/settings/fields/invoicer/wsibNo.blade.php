<!-- WSIB NO -->

{{-- <div class="col-12 col-sm-6">

   <div class="card">
      <div class="card-body p-2">

         <div class="form-group">

            <label for="wsibNo" class="{{ $required ?? '' }}">
               {{ $label ?? 'WSIB No' }}
            </label>
            
            <input
               type="text"
               name="wsibNo"
               id="wsibNo"
               class="form-control @error('wsibNo') is-invalid @enderror"
               value="{{ old('wsibNo') ?? Config::get('invoicer.wsibNo') }}"
               placeholder="wsibNo"
               data-inputmask=""
            />
            <small></small>
            
            @error('wsibNo')
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
      WSIB No
   </td>

   <td class="col-7 col-sm-3">
      <input
         type="text"
         name="wsibNo"
         id="wsibNo"
         class="form-control form-control-sm @error('wsibNo') is-invalid @enderror"
         value="{{ old('wsibNo') ?? Config::get('invoicer.wsibNo') }}"
         placeholder="wsibNo"
         data-inputmask=""
      />
   </td>

   <td class="col-sm-6 d-none d-md-table-cell">

   </td>

</tr>
