<!-- UPC -->
<div class="form-group {{ $errors->has('upc') ? 'has-error' : '' }}">
   <label for="upc">UPC</label>
   <input type="text" name="upc" value="{{ old('upc') ?? $movie->upc }}" class="form-control form-control-sm">
   <div class="pl-1 bg-danger">{{ $errors->first('upc') }}</div>
</div>