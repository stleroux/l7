<!-- DATE FORMAT -->

{{-- <div class="col-12 col-sm-6">
   
   <div class="card">
      <div class="card-body p-2">

         <div class="form-group">

            <label for="dateFormat" class="{{ $required ?? '' }}">
               {{ $label ?? 'Date Format' }}
            </label>
            
            <input
               type="text"
               name="dateFormat"
               id="dateFormat"
               class="form-control @error('dateFormat') is-invalid @enderror"
               value="{{ old('dateFormat') ?? Config::get('settings.dateFormat') }}"
               placeholder="dateFormat"
               data-inputmask=""
            />
            <small>Use any PHP compatible date format</small>
            
            @error('dateFormat')
               <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
               </span>
            @enderror

         </div>

      </div>
   </div>

</div> --}}

<tr class="row">
   
   <td class="col-5 col-sm-3">
      Date Format
   </td>

   <td class="col-7 col-sm-3">
      <input
         type="text"
         name="dateFormat"
         id="dateFormat"
         class="form-control form-control-sm @error('dateFormat') is-invalid @enderror"
         value="{{ old('dateFormat') ?? Config::get('settings.dateFormat') }}"
         placeholder="dateFormat"
         data-inputmask=""
      />
   </td>

   <td class="col-sm-6 d-none d-md-table-cell">
      Use any PHP compatible date format.
   </td>

</tr>