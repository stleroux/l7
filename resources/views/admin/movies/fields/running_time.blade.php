<!-- RUNNING TIME -->
<div class="form-group {{ $errors->has('running_time') ? 'has-error' : '' }}">
   <label for="running_time">Running Time</label>
   <input type="number" name="running_time" value="{{ old('running_time') ?? $movie->running_time }}" class="form-control form-control-sm">
   <div class="pl-1 bg-danger">{{ $errors->first('running_time') }}</div>
</div>
