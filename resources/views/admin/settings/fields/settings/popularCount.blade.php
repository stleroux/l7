<!-- POPULAR COUNT -->

{{-- <div class="col-12 col-sm-6">

   <div class="card">
      <div class="card-body p-2">

         <div class="form-group">

            <label for="popularCount" class="{{ $required ?? '' }}">
               {{ $label ?? 'Popular Count' }}
            </label>
            
            <input
               type="number"
               name="popularCount"
               id="popularCount"
               class="form-control @error('popularCount') is-invalid @enderror"
               value="{{ old('popularCount') ?? Config::get('settings.popularCount') }}"
               placeholder="popularCount"
               data-inputmask=""
            />
            <small>The number of popular items to display in each block</small>
            
            @error('popularCount')
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
      Popular Count
   </td>

   <td class="col-7 col-sm-3">
      <input
         type="number"
         name="popularCount"
         id="popularCount"
         class="form-control form-control-sm @error('popularCount') is-invalid @enderror"
         value="{{ old('popularCount') ?? Config::get('settings.popularCount') }}"
         placeholder="popularCount"
         data-inputmask=""
      />
   </td>

   <td class="col-sm-6 d-none d-md-table-cell">
      The number of popular items to display in each block.
   </td>

</tr>
