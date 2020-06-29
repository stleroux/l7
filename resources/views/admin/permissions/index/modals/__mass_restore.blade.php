<!-- Modal for Confirm Multi-Delete popup-->
<div class="modal" tabindex="-1" role="dialog" id="massRestore-modal">
   
   <div class="modal-dialog" role="document">
      
      <div class="modal-content bg-primary">
         
         <div class="modal-header">
            <h5 class="modal-title">Confirm</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>

         <form action="{{ route('admin.permissions.mass_restore') }}" method="POST">
            @csrf
            {{-- @method('DELETE') --}}

            <div class="modal-body">
               <p>Are you sure you want to restore the selected permissions?</p>
            </div>

            <div class="modal-footer align-items-start">
               <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
               <input name="mass_restore_pass_checkedvalue" type="hidden" value="mass_restore_pass_checkedvalue" id="mass_restore_hidden_checkedinput">
               <button type="submit" class="btn btn-warning">Yes, Restore</button>
            </form>

         </div><!-- Modal Footer -->

      </div><!-- Modal Content-->

   </div><!-- Modal Dialog-->

</div><!-- Modal -->
