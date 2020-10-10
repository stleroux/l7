<!-- RATING -->
<div class="form-group {{ $errors->has('rating') ? 'has-error' : '' }}">
   <label for="rating">Rating</label>
   <input type="text" name="rating" value="{{ old('rating') ?? $movie->rating }}" class="form-control form-control-sm">
   <div class="pl-1 bg-danger">{{ $errors->first('rating') }}</div>
</div>
