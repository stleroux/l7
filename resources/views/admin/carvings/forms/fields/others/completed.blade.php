<div class="col-xs-12 col-sm-6 col-md-4">
   
   <label for="completed_at">Completed Date</label>
   
   <div class="input-group input-group-sm">
   
      <div class="input-group-prepend">
         <span class="input-group-text" id="basic-addon2">
            <i class="fa fa-calendar" aria-hidden="true"></i>
         </span>
      </div>

      @if(Route::currentRouteName('') == 'admin.carvings.show')

         <div class="col p-1 m-0 bg-gray-light border">
            {{-- {{ ($carving->completed_at) ?? $carving->completed_at->format('M d, Y') : 'N/A' }} --}}
            @if($carving->completed_at)
               {{ $carving->completed_at->format('M d, Y') }}
            @else
               N/A
            @endif
         </div>

      @else

      {{-- <div class="input-group input-group-sm"> --}}
         
         {{-- <div class="input-group-prepend"> --}}
            {{-- <span class="input-group-text" id="basic-addon2"> --}}
               {{-- <i class="fa fa-calendar" aria-hidden="true"></i> --}}
            {{-- </span> --}}
         {{-- </div> --}}
         
         <input type="text"
            name="completed_at"
            id="datePicker"
            value="{{ old('completed_at') ?? $carving->completed_at }}"
            class="form-control form-control-sm"
            autocomplete="off" 
         />

      {{-- </div> --}}


   @endif
      </div>
   
</div>
