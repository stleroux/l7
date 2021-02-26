<!-- INVOICER VERSION NO -->

{{-- <div class="col-12 col-sm-6">

   <div class="card">
      <div class="card-body p-2">

         <div class="form-group">

            <label for="version" class="{{ $required ?? '' }}">
               {{ $label ?? 'Version No' }}
            </label>
            
            <input
               type="text"
               name="version"
               id="version"
               class="form-control @error('version') is-invalid @enderror"
               value="{{ old('version') ?? Config::get('invoicer.version') }}"
               placeholder="version"
               data-inputmask=""
            />
            <small></small>
            
            @error('version')
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
      Version No
   </td>

   <td class="col-7 col-sm-3">
      <input
         type="text"
         name="version"
         id="version"
         class="form-control form-control-sm @error('version') is-invalid @enderror"
         value="{{ old('version') ?? Config::get('invoicer.version') }}"
         placeholder="version"
         data-inputmask=""
      />
   </td>

   <td class="col-sm-6 d-none d-md-table-cell">

   </td>

</tr>
