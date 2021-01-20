<!-- POPULAR COUNT -->

<div class="col-12 col-sm-6">

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

</div>
