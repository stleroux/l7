<div class="col-xs-12 col-sm-5">

   <label for="jobSheet">
   		Job Sheet
   	</label>

	<span class="float-right">
   		@if($carving->jobSheet)
			{{ $carving->jobSheet }}				
		@endif
	</span>

   	<div class="input-group input-group-sm">

      {{-- <div class="input-group-prepend">
         <span class="input-group-text" id="basic-addon2">
            <i class="fas fa-dollar-sign"></i>
         </span>
      </div> --}}

    	<input type="file" name="jobSheet" value="{{ old('jobSheet') ?? $carving->jobSheet }}" class="form-control form-control-sm">
   	</div>
    
    <small id="jobSheetHelpBlock" class="form-text text-muted">
    	Only choose new file to replace existing one.
	</small>

</div>
