<!-- STUDIO -->
<div class="form-group {{ $errors->has('studio') ? 'has-error' : '' }}">
   <label for="studio">Studio</label>
   <input type="text" name="studio" value="{{ old('studio') ?? $movie->studio }}" class="form-control form-control-sm">
   <div class="pl-1 bg-danger">{{ $errors->first('studio') }}</div>
</div>
