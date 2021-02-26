<!-- EMAIL -->

{{-- <div class="col-12 col-sm-6">

   <div class="card">
      <div class="card-body p-2">

         <div class="form-group">

            <label for="email" class="{{ $required ?? '' }}">
               {{ $label ?? 'Email' }}
            </label>
            
            <input
               type="text"
               name="email"
               id="email"
               class="form-control @error('email') is-invalid @enderror"
               value="{{ old('email') ?? Config::get('invoicer.email') }}"
               placeholder="email"
               data-inputmask=""
            />
            <small></small>
            
            @error('email')
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
      Email
   </td>

   <td class="col-7 col-sm-3">
      <input
         type="text"
         name="email"
         id="email"
         class="form-control form-control-sm @error('email') is-invalid @enderror"
         value="{{ old('email') ?? Config::get('invoicer.email') }}"
         placeholder="email"
         data-inputmask=""
      />
   </td>

   <td class="col-sm-6 d-none d-md-table-cell">

   </td>

</tr>
