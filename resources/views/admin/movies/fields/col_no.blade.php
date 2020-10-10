<!-- COLLECTION No -->
<div class="form-group {{ $errors->has('col_no') ? 'has-error' : '' }}">
   <label for="col_no">Collection N<supp>o</supp></label>
   
   @if(Route::currentRouteName() == 'admin.movies.edit')
   	<input type="text" name="col_no" value="{{ old('col_no') ?? $movie->col_no }}" class="form-control form-control-sm" readonly>
   @else
   	<input type="text" name="col_no" value="{{ old('col_no') ?? $next_col_no }}" class="form-control form-control-sm" readonly>
   @endif
   
   <div class="pl-1 bg-danger">{{ $errors->first('col_no') }}</div>
</div>
