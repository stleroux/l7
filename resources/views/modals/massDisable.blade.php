<!-- MASS DISABLE MODAL -->
<!-- Used with USERS -->
@php
   $modelNamePlural = Illuminate\Support\Str::plural($modelName);
   $action = $modelNamePlural;
   $fullName = ucfirst($modelNamePlural);
@endphp

<div class="modal bg-secondary" tabindex="-1" role="dialog" id="massDisable-modal">
   
   <div class="modal-dialog modal-dialog-centered" role="document">
      
      <div class="modal-content">
         
         <div class="modal-header bg-primary">
            <h5 class="modal-title">
               {{-- <i class="{{ config('icons.') }}"></i> --}}
               Disable Multiple {{ $fullName }}
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>

         <form action="{{ route('admin.'. $action .'.mass_disable') }}" method="POST">
            @csrf

            <div class="modal-body text-dark">
               <p>Are you sure you want to disabled the selected {{ $modelNamePlural }}?</p>
            </div>

            <div class="modal-footer align-items-start">
               <input name="mass_disable_pass_checkedvalue" type="hidden" value="mass_disable_pass_checkedvalue" id="mass_disable_hidden_checkedinput">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
               <button type="submit" class="btn btn-primary">Disable {{ $fullName }}</button>
            </div><!-- Modal Footer -->
         </form>

      </div><!-- Modal Content-->

   </div><!-- Modal Dialog-->

</div><!-- Modal -->
