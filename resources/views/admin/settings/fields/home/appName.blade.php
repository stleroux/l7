<!-- APPNAME -->

{{-- <div class="col-3">App Name</div>
<div class="col-3">
   <input
      type="text"
      name="appName"
      id="appName"
      class="form-control form-control-sm @error('appName') is-invalid @enderror"
      value="{{ old('appName') ?? Config::get('settings.appName') }}"
      placeholder="appName"
      data-inputmask=""
   />
</div>
<div class="col">
   The name of the application as it will apppear throughout the site.
</div> --}}

{{-- <div class="col-12 col-md-6">
   <div class="card">
      <div class="card-body p-2">

         <div class="form-group">

            <label for="appName" class="{{ $required ?? '' }}">
               {{ $label ?? 'App Name' }}
            </label>
            
            <input
               type="text"
               name="appName"
               id="appName"
               class="form-control @error('appName') is-invalid @enderror"
               value="{{ old('appName') ?? Config::get('settings.appName') }}"
               placeholder="appName"
               data-inputmask=""
            />
            <small>The name of the application as it will apppear throughout the site</small>
            
            @error('appName')
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
      App Name
   </th>
   
   <td class="col-7 col-sm-3">
      <input
         type="text"
         name="appName"
         id="appName"
         class="form-control form-control-sm @error('appName') is-invalid @enderror"
         value="{{ old('appName') ?? Config::get('settings.appName') }}"
         placeholder="appName"
         data-inputmask=""
         title="The name of the application as it will apppear throughout the site."
      />
   </td>
   
   <td class="col-sm-6 d-none d-md-table-cell">
      The name of the application as it will apppear throughout the site.
   </td>
   
</tr>
