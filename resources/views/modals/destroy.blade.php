<!-- DESTROY MODAL -->
<div class="modal bg-secondary" id="destroyModal" tabindex="-1" role="dialog">
   <div class="modal-dialog modal-dialog-centered" role="document"> <!-- modal-dialog-centered -->
      <div class="modal-content">
         <div class="modal-header bg-pink">
            <h5 class="modal-title" id="exampleModalLongTitle">
               <i class="{{ Config::get('icons.') }}"></i>
               Trash {{ ucwords(Illuminate\Support\Str::of($modelName)->replace('.', ' ')) }}?
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>

         <form action="" method="post" id="destroyForm">
            @csrf
            @method('DELETE')

            <div class="modal-body text-dark">
               <p class="font-weight-bold">Are you sure you want to trash this {{ $modelName }}?</p>
               <p class="small font-weight-bold text-danger">Only an Administrator will be able to undo this action.</p>
            </div>
            
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
               <button type="submit" class="btn bg-pink">Trash {{ ucwords(Illuminate\Support\Str::of($modelName)->replace('.', ' ')) }}</button>
            </div>
         </form>
      
      </div> <!-- modal content -->
   
   </div><!-- modal dialog -->

</div><!-- modal -->
