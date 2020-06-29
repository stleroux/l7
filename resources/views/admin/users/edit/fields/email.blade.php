<!-- EMAIL -->
<div class="form-group col-6">
   <label for="email" class="col-form-label">E-Mail</label>
   <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" />
   @error('email')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror
</div>
