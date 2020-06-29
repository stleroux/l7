<!-- Modal for Confirm Multi-Delete popup-->
<div class="modal" tabindex="-1" role="dialog" id="massDelete-modal">
   
   <div class="modal-dialog" role="document">
      
      <div class="modal-content bg-danger">
         
         <div class="modal-header">
            <h5 class="modal-title">Confirm</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>

         <form action="{{ route('admin.roles.mass_delete') }}" method="POST">
            @csrf
            @method('DELETE')

            <div class="modal-body">
               <p>Are you sure you want to PERMANENTLY delete the selected roles?</p>
               <p>This action CANNOT be reverted.</p>
            </div>

            <div class="modal-footer align-items-start">
               <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
               <input name="mass_delete_pass_checkedvalue" type="hidden" value="mass_delete_pass_checkedvalue" id="mass_delete_hidden_checkedinput">
               <button type="submit" class="btn btn-warning">Yes, Delete Permanently</button>
            </form>

         </div><!-- Modal Footer -->

      </div><!-- Modal Content-->

   </div><!-- Modal Dialog-->

</div><!-- Modal -->
