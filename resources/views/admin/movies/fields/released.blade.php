<!-- RELEASED -->
<div class="form-group {{ $errors->has('released') ? 'has-error' : '' }}">
   <label for="released">Released</label>
   <input type="text" name="released" value="{{ old('released') ?? $movie->released }}" class="form-control form-control-sm">
   <div class="pl-1 bg-danger">{{ $errors->first('released') }}</div>
</div>
