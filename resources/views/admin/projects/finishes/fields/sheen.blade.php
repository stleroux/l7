<!-- SHEEN -->

<div class="col-12 col-md-3">
   
   <div class="form-group">
      
      <label for="sheen" class="">Sheen</label>
      
      <select name="sheen" id="sheen" class="form-control form-control-sm @error('sheen') is-invalid @enderror">
         @foreach($finish->sheenOptions() as $sheenOptionKey => $sheenOptionValue)
            <option value="{{$sheenOptionKey}}" {{ $finish->sheen == $sheenOptionValue ? 'selected' : '' }}>{{ $sheenOptionValue }}</option>
         @endforeach
      </select>
      
      @error('sheen')
         <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
         </span>
      @enderror

   </div>
   
</div>
