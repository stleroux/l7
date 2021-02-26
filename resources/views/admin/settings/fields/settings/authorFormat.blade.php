<!-- AUTHOR FORMAT -->

{{-- <div class="col-12 col-sm-6">

   <div class="card">
      <div class="card-body p-2">

         <div class="form-group">

            <label for="authorFormat" class="{{ $required ?? '' }}">
               {{ $label ?? 'Author Format' }}
            </label>

            <select name="authorFormat" class="form-control @error('authorFormat') is-invalid @enderror">
               <option value="username" {{ config('settings.authorFormat') == 'username' ? 'selected' : '' }}>Username</option>
               <option value="last_name, first_name" {{ config('settings.authorFormat') == 'last_name, first_name' ? 'selected' : '' }}>Last Name, First Name</option>
               <option value="first_name last_name" {{ config('settings.authorFormat') == 'first_name last_name' ? 'selected' : '' }}>First Name Last Name</option>
            </select>
            <small>The information to display in Author modal or in tables and grids</small>

            @error('authorFormat')
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
      Author Format
   </td>

   <td class="col-7 col-sm-3">
      <select name="authorFormat" class="form-control form-control-sm @error('authorFormat') is-invalid @enderror">
         <option value="username" {{ config('settings.authorFormat') == 'username' ? 'selected' : '' }}>Username</option>
         <option value="last_name, first_name" {{ config('settings.authorFormat') == 'last_name, first_name' ? 'selected' : '' }}>Last Name, First Name</option>
         <option value="first_name last_name" {{ config('settings.authorFormat') == 'first_name last_name' ? 'selected' : '' }}>First Name Last Name</option>
      </select>
   </td>

   <td class="col-sm-6 d-none d-md-table-cell">
      The information to display in Author modal or in tables and grids.
   </td>

</tr>
