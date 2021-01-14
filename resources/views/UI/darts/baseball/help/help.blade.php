<!-- HELP MODAL -->
<div class="modal fade" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-xl" role="document"> <!-- modal-dialog-centered -->
      <div class="modal-content">
         <div class="modal-header bg-primary p-2 m-0">
            <h5 class="modal-title" id="exampleModalLongTitle">
               <i class="{{ config('icons.darts') }}"></i>
               Baseball Help
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>

         <div class="modal-body m-0 p-0">

            <div class="card m-0 p-0">
               <div class="card-body p-2 m-0">
                  @include('UI.darts.baseball.help.details')
                  @include('UI.darts.baseball.help.alsoKnownAs')
                  @include('UI.darts.baseball.help.overview')
                  @include('UI.darts.baseball.help.howToPlay')
                  @include('UI.darts.baseball.help.rulesOfPlay')
                  @include('UI.darts.baseball.help.howToWin')
               </div>
            </div>

         </div>
            
         <div class="modal-footer p-0 mx-auto">
            <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Close</button>
         </div>
      
      </div> <!-- modal content -->
   
   </div><!-- modal dialog -->

</div><!-- modal -->
