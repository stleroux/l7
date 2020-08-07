<!-- MASS DESTROY MODAL -->
@php
   $modelNamePlural = Illuminate\Support\Str::plural($modelName);
   if(($modelName == "finish") || ($modelName == "material"))
   {
      $action = "projects." . $modelNamePlural;
      $fullName = " Project " . ucfirst($modelNamePlural);
   } else {
      $action = $modelNamePlural;
      $fullName = ucfirst($modelNamePlural);
   }
@endphp

<div class="modal bg-secondary" tabindex="-1" role="dialog" id="massDestroy-modal">
   
   <div class="modal-dialog modal-dialog-centered" role="document">
      
      <div class="modal-content">
         
         <div class="modal-header bg-pink">
            <h5 class="modal-title">
               <i class="{{ Config::get('icons.') }}"></i>
               Trash Multiple {{ $fullName }}
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>

         <form action="{{ route('admin.'. $action .'.mass_destroy') }}" method="POST">
            @csrf
            @method('DELETE')

            <div class="modal-body text-dark">
               <p>Are you sure you want to trash the selected {{ $modelNamePlural }}?</p>
               <p class="small font-weight-bold text-danger">Only an Administrator will be able to undo this action.</small>
            </div>

            <div class="modal-footer align-items-start">
               <input name="mass_destroy_pass_checkedvalue" type="hidden" value="mass_destroy_pass_checkedvalue" id="mass_destroy_hidden_checkedinput">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
               <button type="submit" class="btn bg-pink">Trash {{ $fullName }}</button>
            </form>

         </div><!-- Modal Footer -->

      </div><!-- Modal Content-->

   </div><!-- Modal Dialog-->

</div><!-- Modal -->
