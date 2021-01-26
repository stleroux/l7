<!-- IMAGE MODAL -->
<div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-xl" role="document"> <!-- modal-dialog-centered -->
      <div class="modal-content">
         <div class="modal-header bg-primary p-2 m-0">
            <h5 class="modal-title" id="exampleModalLongTitle">
               <i class="<?php echo e(config('icons.movies')); ?>"></i>
               Movie Image
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>

         <div class="modal-body m-0 p-0">

            <div class="row justify-content-center">
               <div class="card m-0 p-0">
                  <div class="card-body p-2 m-0">
                     <?php if(!Str::contains($movie->upc, 'Disc ID: ')): ?>
                        <?php if(file_exists(public_path() . '/_movies/' . str_replace('-', '', $movie->upc . '.3f.jpg'))): ?>
                           <img src="\_movies\<?php echo e(str_replace('-', '', $movie->upc . '.3f.jpg')); ?>" />
                        <?php elseif(file_exists(public_path() . '/_movies/' . str_replace('-', '', $movie->upc . '.2f.jpg'))): ?>
                           <img src="\_movies\<?php echo e(str_replace('-', '', $movie->upc . '.2f.jpg')); ?>" />
                        <?php else: ?>
                           <img src="\_movies\<?php echo e(str_replace('-', '', $movie->upc)); ?>f.jpg" />
                        <?php endif; ?>
                     <?php else: ?>
                        <?php if($image = Str::of(str_replace('-', '', str_replace('Disc ID: ', '', $movie->upc)))->prepend('I')): ?>
                           <img src="\_movies\<?php echo e(str_replace('-', '', $image . 'f.jpg')); ?>" />
                        <?php endif; ?>
                     <?php endif; ?>
                  </div>
               </div>

               <div class="card m-0 p-0">
                  <div class="card-body p-2 m-0">
                     <?php if(!Str::contains($movie->upc, 'Disc ID: ')): ?>
                        <?php if(file_exists(public_path() . '/_movies/' . str_replace('-', '', $movie->upc . '.3b.jpg'))): ?>
                           <img src="\_movies\<?php echo e(str_replace('-', '', $movie->upc . '.3b.jpg')); ?>" />
                        <?php elseif(file_exists(public_path() . '/_movies/' . str_replace('-', '', $movie->upc . '.2b.jpg'))): ?>
                           <img src="\_movies\<?php echo e(str_replace('-', '', $movie->upc . '.2b.jpg')); ?>" />
                        <?php else: ?>
                           <img src="\_movies\<?php echo e(str_replace('-', '', $movie->upc)); ?>b.jpg" />
                        <?php endif; ?>
                     <?php else: ?>
                        <?php if($image = Str::of(str_replace('-', '', str_replace('Disc ID: ', '', $movie->upc)))->prepend('I')): ?>
                           <img src="\_movies\<?php echo e(str_replace('-', '', $image . 'b.jpg')); ?>" />
                        <?php endif; ?>
                     <?php endif; ?>
                  </div>
               </div>

            </div>
         
         </div>

         <div class="modal-footer p-0 mx-auto">
            <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Close</button>
         </div>
      
      </div> <!-- modal content -->
   
   </div><!-- modal dialog -->

</div><!-- modal
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/movies/show/imageModal.blade.php ENDPATH**/ ?>