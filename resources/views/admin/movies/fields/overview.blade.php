<!-- OVERVIEW -->
{{-- <div class="col-xs-12 col-sm-12 col-md-12">
   <div class="form-group {{ $errors->has('overview') ? 'has-error' : '' }}">
      <label for="overview">Overview</label>
      <textarea name="overview" rows="5" class="simple form-control form-control-sm">{{ old('overview') ?? $movie->overview }}</textarea>
      <div class="pl-1 bg-danger">{{ $errors->first('overview') }}</div>
   </div>
</div> --}}

<div class="form-group">

   <label for="overview" class="{{ $required ?? '' }}">
      {{ $label ?? 'Overview' }}
   </label>
   
   <textarea
   	name="overview"
   	id="overview"
   	rows="8"
   	class="simple form-control form-control-sm @error('overview') is-invalid @enderror">{{ old('overview') ?? $movie->overview }}</textarea>
   
   @error('overview')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>