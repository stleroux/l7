<!-- AUTHOR FORMAT -->

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