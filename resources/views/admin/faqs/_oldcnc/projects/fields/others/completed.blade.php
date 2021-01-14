<div class="col-xs-12 col-sm-6 col-md-4">
   
   <label for="completed_at">Completed Date</label>
   
   <div class="input-group input-group-sm">
      
      <div class="input-group-prepend">
         <span class="input-group-text" id="basic-addon2">
            <i class="fa fa-calendar" aria-hidden="true"></i>
         </span>
      </div>
      
      <input type="text"
         name="completed_at"
         id="datePicker"
         value="{{ old('completed_at') ?? $project->completed_at }}"
         class="form-control form-control-sm"
         autocomplete="off" 
      />

   </div>
   
</div>
