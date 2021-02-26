<!-- INVOICER VERSION NO -->

{{-- <div class="col-12 col-sm-6">

   <div class="card">
      <div class="card-body p-2">

         <div class="form-group">

            <label for="version" class="{{ $required ?? '' }}">
               {{ $label ?? 'Version No' }}
            </label>
            
            <input
               type="text"
               name="version"
               id="version"
               class="form-control @error('version') is-invalid @enderror"
               value="{{ old('version') ?? Config::get('invoicer.version') }}"
               placeholder="version"
               data-inputmask=""
            />
            <small></small>
            
            @error('version')
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
      Users To Notify
   </td>

   <td class="col-7 col-sm-3">
      <input
         type="text"
         name="usersToNotify"
         id="usersToNotify"
         class="form-control form-control-sm @error('usersToNotify') is-invalid @enderror"
         value="{{ old('usersToNotify') ?? Config::get('invoicer.usersToNotify') }}"
         placeholder="Users To Notify"
         data-inputmask=""
      />
   </td>

   <td class="col-sm-6 d-none d-md-table-cell">
      Comma seperated list of user ids (i.e.: 1,2,3)
      
      <span class="float-right">
         <select name="users" class="form-control form-control-sm">
            <option value="">Possible Values</option>
            @foreach($users as $key => $value)
               <option value="">{{ $key }} => {{ $value }}</option>
            @endforeach
         </select>
      </span>

   </td>

</tr>
