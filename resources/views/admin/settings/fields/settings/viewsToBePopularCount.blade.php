<!-- POPULAR COUNT -->

{{-- <div class="col-12 col-sm-6">

   <div class="card">
      <div class="card-body p-2">

         <div class="form-group">

            <label for="viewsToBePopularCount" class="{{ $required ?? '' }}">
               {{ $label ?? 'Views To Be Popular Count' }}
            </label>
            
            <input
               type="number"
               name="viewsToBePopularCount"
               id="viewsToBePopularCount"
               class="form-control @error('viewsToBePopularCount') is-invalid @enderror"
               value="{{ old('viewsToBePopularCount') ?? Config::get('settings.viewsToBePopularCount') }}"
               placeholder="viewsToBePopularCount"
               data-inputmask=""
            />
            <small>The minimum number of views an item must have to be considered a popular item.</small>
            
            @error('viewsToBePopularCount')
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
      Views To Be Popular Count
   </td>

   <td class="col-7 col-sm-3">
      <input
         type="number"
         name="viewsToBePopularCount"
         id="viewsToBePopularCount"
         class="form-control form-control-sm @error('viewsToBePopularCount') is-invalid @enderror"
         value="{{ old('viewsToBePopularCount') ?? Config::get('settings.viewsToBePopularCount') }}"
         placeholder="viewsToBePopularCount"
         data-inputmask=""
      />
   </td>

   <td class="col-sm-6 d-none d-md-table-cell">
      The minimum number of views an item must have to be considered a popular item.
   </td>

</tr>
