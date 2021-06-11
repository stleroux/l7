<!-- HELP MODAL -->
<!-- Title : Title to display at top of help popup -->
<!-- Icon : Icon to display in header beside title -->
<!-- Path : The path to the location of the help files -->
{{-- 
   @include('help.index', ['title'=>'XXXX', 'icon'=>'XXXX', 'path'=>'XXXX'])
--}}

<div class="modal bg-secondary" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-xl" role="document"> <!-- modal-dialog-centered -->
      <div class="modal-content p-0 m-0 text-dark">
         <div class="modal-header bg-primary p-2 m-0">
            <h5 class="modal-title" id="exampleModalLongTitle">
               <i class="{{ config('icons.'.$icon) }}"></i>
               {{ $title }} Help
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body m-1 p-1">

            {{-- <div class="card m-0 p-0 border-0"> --}}
               <div class="card-body p-0 m-0">

<!----------------------------------------------------------------------------------------->

   @includeIf('help.'.$path.'.introduction')
   @includeIf('help.'.$path.'.howTo')
   @includeIf('help.'.$path.'.fields')
   @includeIf('help.'.$path.'.actions')

<!----------------------------------------------------------------------------------------->

               </div>
               <!-- card-body -->
            {{-- </div> --}}
            <!-- card -->
      
         </div><!-- modal body -->

         <div class="modal-footer p-0 m-0">
            <div class="mx-auto">
               <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Close</button>               
            </div>
         </div>
         

      </div><!-- modal content -->

   </div><!-- modal dialog -->

</div><!-- modal -->
