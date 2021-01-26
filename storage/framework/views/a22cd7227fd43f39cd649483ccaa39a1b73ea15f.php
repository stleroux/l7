<!-- HELP MODAL -->
<!-- Title : Title to display at top of help popup -->
<!-- Icon : Icon to display in header beside title -->
<!-- Path : The path to the location of the help files -->


<div class="modal bg-secondary" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-xl" role="document"> <!-- modal-dialog-centered -->
      <div class="modal-content text-dark">
         <div class="modal-header bg-primary p-2 m-0">
            <h5 class="modal-title" id="exampleModalLongTitle">
               <i class="<?php echo e(config('icons.'.$icon)); ?>"></i>
               <?php echo e($title); ?> Help
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body m-0 p-0">

            <div class="card m-0 p-0">
               <div class="card-body p-2 m-0">

<!----------------------------------------------------------------------------------------->

   <?php if ($__env->exists('help.'.$path.'.introduction')) echo $__env->make('help.'.$path.'.introduction', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php if ($__env->exists('help.'.$path.'.howTo')) echo $__env->make('help.'.$path.'.howTo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php if ($__env->exists('help.'.$path.'.fields')) echo $__env->make('help.'.$path.'.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php if ($__env->exists('help.'.$path.'.actions')) echo $__env->make('help.'.$path.'.actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!----------------------------------------------------------------------------------------->

               </div><!-- card-body -->
            </div><!-- card -->
      
         </div><!-- modal body -->

         <div class="modal-footer p-0 mx-auto">
            <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Close</button>
         </div>

      </div><!-- modal content -->

   </div><!-- modal dialog -->

</div><!-- modal -->
<?php /**PATH /home/lerouxs/sites/l7/resources/views/help/index.blade.php ENDPATH**/ ?>