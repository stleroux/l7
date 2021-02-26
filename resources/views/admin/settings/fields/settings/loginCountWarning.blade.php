<!-- LOGIN COUNT WARNING -->

{{-- <div class="col-12 col-sm-6">

   <div class="card">
      <div class="card-body p-2">

         <div class="form-group">

            <label for="login_count_warning" class="{{ $required ?? '' }}">
               {{ $label ?? 'Login Count Warning' }}
            </label>
            
            <input
               type="text"
               name="login_count_warning"
               id="login_count_warning"
               class="form-control @error('login_count_warning') is-invalid @enderror"
               value="{{ old('loginCountWarning') ?? Config::get('settings.loginCountWarning') }}"
               placeholder="login_count_warning"
               data-inputmask=""
            />
            <small>How many times a user has to login to the site before the New User Panel is no longer shown</small>
            
            @error('login_count_warning')
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
      Login Count Warning
   </td>

   <td class="col-7 col-sm-3">
      <input
         type="text"
         name="login_count_warning"
         id="login_count_warning"
         class="form-control form-control-sm @error('login_count_warning') is-invalid @enderror"
         value="{{ old('loginCountWarning') ?? Config::get('settings.loginCountWarning') }}"
         placeholder="login_count_warning"
         data-inputmask=""
      />
   </td>

   <td class="col-sm-6 d-none d-md-table-cell">
      How many times a user has to login to the site before the New User Panel is no longer shown.
   </td>

</tr>
