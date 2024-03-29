<div class="col-xs-12 col-sm-6 col-md-3">

   <label for="time_invested">Machine Time <small>(Hrs)</small></label>

   <div class="input-group input-group-sm">

      <div class="input-group-prepend">
         <span class="input-group-text" id="basic-addon2">
            <i class="far fa-clock"></i>
         </span>
      </div>

      @if(Route::currentRouteName('') == 'admin.carvings.show')

         <div class="col p-1 m-0 bg-gray-light border">
            {!! $carving->machine_time_hrs ?? 'N/A' !!}
         </div>

      @else

         <input type="number" name="machine_time_hrs" value="{{ old('machine_time_hrs') ?? $carving->machine_time_hrs }}" class="form-control form-control-sm">

      @endif

   </div>

</div>
