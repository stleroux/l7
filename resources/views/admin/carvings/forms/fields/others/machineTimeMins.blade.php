<div class="col-xs-12 col-sm-6 col-md-3">

   <label for="time_invested">Machine Time <small>(Mins)</small></label>

   <div class="input-group input-group-sm">

      <div class="input-group-prepend">
         <span class="input-group-text" id="basic-addon2">
            <i class="far fa-clock"></i>
         </span>
      </div>

      @if(Route::currentRouteName('') == 'admin.carvings.show')

         <div class="col p-1 m-0 bg-gray-light border">
            {!! $carving->machine_time_mins ?? 'N/A' !!}
         </div>

      @else

         <input type="number" name="machine_time_mins" value="{{ old('machine_time_mins') ?? $carving->machine_time_mins }}" class="form-control form-control-sm">

      @endif

   </div>

</div>
