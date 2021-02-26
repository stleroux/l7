<!-- DART DOUBLEOUT -->

<div class="form-group">

   <label for="dart_doubleOut" class="{{ $required ?? '' }}">
      {{ $label ?? 'Dart Double Out' }}
   </label>

   @if(Route::currentRouteName('') == 'admin.users.show')

      <div class="p-1 m-0 bg-gray-light">
         {!! $user->darts_doubleOut !!}
      </div>

   @else

      <select
         name="dart_doubleOut"
         id="dart_doubleOut"
         class="form-control @error('dart_doubleOut') is-invalid @enderror"
         title="Preferred double out for Dart games"
         {{ $disabled ?? '' }}
      >
         @foreach($user->dartOptions() as $dartOptionKey => $dartOptionValue)
            <option value="{{$dartOptionKey}}" {{ $user->dart_doubleOut == $dartOptionValue ? 'selected' : '' }}>{{ $dartOptionValue }}</option>
         @endforeach
      </select>

   @endif

   
   @error('dart_doubleOut')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
