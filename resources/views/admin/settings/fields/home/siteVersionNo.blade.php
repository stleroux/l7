<!-- SITE VERSION NUMBER -->

{{-- <div class="col-12 col-sm-2">
   <div class="card">
      <div class="card-body p-2">

         <div class="form-group">

            <label for="siteVersionNo" class="{{ $required ?? '' }}">
               {{ $label ?? 'Site Version No' }}
            </label>
            
            <input
               type="text"
               name="siteVersionNo"
               id="siteVersionNo"
               class="form-control @error('siteVersionNo') is-invalid @enderror"
               value="{{ old('siteVersionNo') ?? Config::get('settings.siteVersionNo') }}"
               placeholder="siteVersionNo"
               data-inputmask=""
            />
            <small>Site version number</small>
            
            @error('siteVersionNo')
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
      Site Version No
   </th>

   <td class="col-7 col-sm-3">
      <input
         type="text"
         name="siteVersionNo"
         id="siteVersionNo"
         class="form-control form-control-sm @error('siteVersionNo') is-invalid @enderror"
         value="{{ old('siteVersionNo') ?? Config::get('settings.siteVersionNo') }}"
         placeholder="siteVersionNo"
         data-inputmask=""
      />
   </td>

   <td class="col-sm-6 d-none d-md-table-cell"></td>

</tr>
