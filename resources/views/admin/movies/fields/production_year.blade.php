<!-- PRODUCTION YEAR -->
<div class="form-group {{ $errors->has('production_year') ? 'has-error' : '' }}">
   <label for="production_year">Production Year</label>
   <input type="text" name="production_year" value="{{ old('production_year') ?? $movie->production_year }}" class="form-control form-control-sm">
   <div class="pl-1 bg-danger">{{ $errors->first('production_year') }}</div>
</div>
