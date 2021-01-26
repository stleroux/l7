<!-- SHEEN -->

<div class="col-12 col-md-3">
   
   <div class="form-group">
      
      <label for="sheen" class="">Sheen</label>
      
      @if(Route::currentRouteName('') == 'admin.finishes.show')

         <div class="p-1 m-0 bg-gray-light">
            {!! $finish->sheen !!}
         </div>

      @else

         <select name="sheen" id="sheen" class="form-control form-control-sm @error('sheen') is-invalid @enderror">
            @foreach($finish->sheenOptions() as $sheenOptionKey => $sheenOptionValue)
               <option value="{{$sheenOptionKey}}" {{ $finish->sheen == $sheenOptionValue ? 'selected' : '' }}>{{ $sheenOptionValue }}</option>
            @endforeach
         </select>

      @endif
      
      @error('sheen')
         <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
         </span>
      @enderror

   </div>
   
</div>
