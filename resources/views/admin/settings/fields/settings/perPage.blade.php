<!-- PER PAGE COUNT -->

<div class="col-12 col-sm-6">

   <div class="card">
      <div class="card-body p-2">

         <div class="form-group">

            <label for="perPage" class="{{ $required ?? '' }}">
               {{ $label ?? 'Rows per page' }}
            </label>
            
         {{--    <input
               type="number"
               name="perPage"
               id="perPage"
               class="form-control @error('perPage') is-invalid @enderror"
               value="{{ old('perPage') ?? Config::get('settings.perPage') }}"
               placeholder="perPage"
               data-inputmask=""
            /> --}}

            <select name="perPage" class="form-control @error('perPage') is-invalid @enderror">
               <option value="10" {{ config('settings.perPage') == '10' ? 'selected' : '' }}>10</option>
               <option value="15" {{ config('settings.perPage') == '15' ? 'selected' : '' }}>15</option>
               <option value="20" {{ config('settings.perPage') == '20' ? 'selected' : '' }}>20</option>
               <option value="25" {{ config('settings.perPage') == '25' ? 'selected' : '' }}>25</option>
               <option value="50" {{ config('settings.perPage') == '50' ? 'selected' : '' }}>50</option>
               <option value="100" {{ config('settings.perPage') == '100' ? 'selected' : '' }}>100</option>
            </select>



            <small>The number of rows to display in the table pagination</small>
            
            @error('perPage')
               <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
               </span>
            @enderror

         </div>

      </div>
   </div>

</div>
