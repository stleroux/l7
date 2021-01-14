<!-- DELETE MODAL -->
<div class="modal fade" id="restoreModal" tabindex="-1" role="dialog">
   <div class="modal-dialog" role="document"> <!-- modal-dialog-centered -->
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Restore Project?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>

         <form action="" method="get" id="restoreForm">
            @csrf
            {{-- @method('DELETE') --}}

            <div class="modal-body">
               Are you sure you want to restore this project?
            </div>
            
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Cancel</button>
               <button type="submit" class="btn btn-success">Yes, Restore</button>
            </div>
         </form>
      
      </div> <!-- modal content -->
   
   </div><!-- modal dialog -->

</div><!-- modal -->
