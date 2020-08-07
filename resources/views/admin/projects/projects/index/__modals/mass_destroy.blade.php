<!-- Modal for Confirm Multi-Delete popup-->
<div class="modal" tabindex="-1" role="dialog" id="massDestroy-modal">
   
   <div class="modal-dialog" role="document">
      
      <div class="modal-content bg-danger">
         
         <div class="modal-header">
            <h5 class="modal-title">Confirm</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>

         <form action="{{ route('admin.projects.mass_destroy') }}" method="POST">
            @csrf
            @method('DELETE')

            <div class="modal-body">
               <p>Are you sure you want to trash the selected projects?</p>
            </div>

            <div class="modal-footer align-items-start">
               <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
               <input name="mass_destroy_pass_checkedvalue" type="hidden" value="mass_destroy_pass_checkedvalue" id="mass_destroy_hidden_checkedinput">
               <button type="submit" class="btn btn-warning">Yes, Trash</button>
            </form>

         </div><!-- Modal Footer -->

      </div><!-- Modal Content-->

   </div><!-- Modal Dialog-->

</div><!-- Modal -->
