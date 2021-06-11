<div class="col-xs-12 col-sm-5">

   <label for="jobSheet">
   	Job Sheet
   </label>

	<span class="float-right">
   	@if($carving->jobSheet)
         @if(Route::currentRouteName('') != 'admin.carvings.show')
			   {{ $carving->jobSheet }}
         @endif
		@endif
	</span>

	<div class="input-group input-group-sm">

      @if(Route::currentRouteName('') == 'admin.carvings.show')

         <div class="col p-1 m-0 bg-gray-light border">
            {!! $carving->jobSheet ?? 'N/A' !!}
         </div>

      @else

    	 <input type="file" name="jobSheet" value="{{ old('jobSheet') ?? $carving->jobSheet }}" class="form-control form-control-sm">
   	

      @endif
      
   </div>

   @if(Route::currentRouteName('') != 'admin.carvings.show')
      <small id="jobSheetHelpBlock" class="form-text text-muted">
          Only choose new file to replace existing one.
      </small>
   @endif
    

</div>
