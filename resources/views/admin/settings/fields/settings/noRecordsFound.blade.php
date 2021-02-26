<!-- NO RECORDS FOUND -->

{{-- <div class="col-12 col-sm-6">

   <div class="card">
      <div class="card-body p-2">

         <div class="form-group">

            <label for="noRecordsFound" class="{{ $required ?? '' }}">
               {{ $label ?? 'No Records Found Message' }}
            </label>
            
            <input
               type="text"
               name="noRecordsFound"
               id="noRecordsFound"
               class="form-control @error('noRecordsFound') is-invalid @enderror"
               value="{{ old('noRecordsFound') ?? Config::get('settings.noRecordsFound') }}"
               placeholder="noRecordsFound"
               data-inputmask=""
            />
            <small>Message to display when no records are found in the database</small>
            
            @error('noRecordsFound')
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
      No Records Found Message
   </td>

   <td class="col-7 col-sm-3">
      <input
         type="text"
         name="noRecordsFound"
         id="noRecordsFound"
         class="form-control form-control-sm @error('noRecordsFound') is-invalid @enderror"
         value="{{ old('noRecordsFound') ?? Config::get('settings.noRecordsFound') }}"
         placeholder="noRecordsFound"
         data-inputmask=""
      />
   </td>

   <td class="col-sm-6 d-none d-md-table-cell">
      Message to display when no records are found in the database.
   </td>

</tr>
