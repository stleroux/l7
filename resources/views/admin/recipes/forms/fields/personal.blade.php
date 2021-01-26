<!-- PERSONAL -->
   
<div class="form-group">
   
   <label for="personal" class="col-form-label {{ $required ?? '' }}">Make Private</label>
   
   <select name="personal" id="personal" class="form-control form-control-sm @error('personal') is-invalid @enderror">
      @foreach($recipe->personalOptions() as $personalOptionKey => $personalOptionValue)
         <option value="{{$personalOptionKey}}" {{ $recipe->personal == $personalOptionValue ? 'selected' : '' }}>{{ $personalOptionValue }}</option>
      @endforeach
   </select>
   
   @error('personal')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
