<!-- STATUS -->

<div class="form-group">
   
   <label for="status" class="{{ $required ?? '' }}">
   	Status
   </label>
   
   <select name="status" id="status" class="form-control form-control-sm @error('status') is-invalid @enderror" disabled>
      @foreach($bug->statusOptions() as $statusOptionKey => $statusOptionValue)
         <option value="{{$statusOptionKey}}" {{ $bug->status == $statusOptionValue ? 'selected' : '' }}>{{ $statusOptionValue }}</option>
      @endforeach
   </select>
   
   @error('status')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>