<!-- IMDB No -->
<div class="form-group {{ $errors->has('original_title') ? 'has-error' : '' }}">
   <label for="imdb_no">IMDB N<supp>o</supp></label>
   <input type="text" name="imdb_no" value="{{ old('imdb_no') ?? $movie->imdb_no }}" class="form-control form-control-sm">
   <div class="pl-1 bg-danger">{{ $errors->first('original_title') }}</div>
</div>
