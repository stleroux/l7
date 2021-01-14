<!-- MASS RESTORE MODAL -->
{{-- @php
   $modelNamePlural = Illuminate\Support\Str::plural($modelName);
   if(($modelName == "finish") || ($modelName == "material"))
   {
      $action = "projects." . $modelNamePlural;
      $fullName = " Project " . ucfirst($modelNamePlural);
   } else {
      $action = $modelNamePlural;
      $fullName = ucfirst($modelNamePlural);
   }
@endphp --}}

@php
   $modelNamePlural = Illuminate\Support\Str::plural($modelName);
   $action = $modelNamePlural;
   $fullName = ucfirst($modelNamePlural);
@endphp

<div class="modal bg-secondary" tabindex="-1" role="dialog" id="massRestore-modal">
   
   <div class="modal-dialog modal-dialog-centered" role="document">
      
      <div class="modal-content">
         
         <div class="modal-header bg-primary">
            <h5 class="modal-title">
               {{-- <i class="{{ config('icons.') }}"></i> --}}
               Restore Multiple {{ $fullName }}
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>

         <form action="{{ route('admin.'. $action .'.mass_restore') }}" method="POST">
            @csrf

            <div class="modal-body text-dark">
               <p>Are you sure you want to restore the selected {{ $modelNamePlural }}?</p>
            </div>

            <div class="modal-footer align-items-start">
               <input name="mass_restore_pass_checkedvalue" type="hidden" value="mass_restore_pass_checkedvalue" id="mass_restore_hidden_checkedinput">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
               <button type="submit" class="btn btn-primary">Restore {{ $fullName }}</button>
            </div><!-- Modal Footer -->
         </form>

      </div><!-- Modal Content-->

   </div><!-- Modal Dialog-->

</div><!-- Modal -->
