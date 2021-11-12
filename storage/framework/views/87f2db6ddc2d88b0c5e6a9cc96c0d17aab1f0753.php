<?php
// use CyrildeWit\EloquentViewable\Support\Period;
?>

<div class="card card-outline card-info text-dark mb-2">

   <div class="card-header bg-primary p-1">
      <div class="card-title">
         <i class="<?php echo e(config('icons.info')); ?>"></i>
         Information
      </div>
   </div>

   <div class="card-body p-0">
      <table class="table table-sm table-hover table-striped">
         <tbody class="">
            <tr>
               <th>Category</th>
               <td><?php echo e($carving->category); ?></td>
            </tr>
            <tr>
               <th>Total Views</th>
               <td>
                  <?php echo e(views($carving)->count()); ?>

               </td>
            </tr>
            <tr>
               <th>Views Last Month</th>
               <td>
                  <?php echo e(views($carving)->period(CyrildeWit\EloquentViewable\Support\Period::pastMonths(1))->count()); ?>

               </td>
            </tr>
            <tr>
               <th>Width <small>(inches)</small></th>
               <td><?php echo e($carving->width ?? "N/A"); ?></td>
            </tr>
            <tr>
               <th>Depth <small>(inches)</small></th>
               <td><?php echo e($carving->depth ?? "N/A"); ?></td>
            </tr>
            <tr>
               <th>Height <small>(inches)</small></th>
               <td><?php echo e($carving->height ?? "N/A"); ?></td>
            </tr>
            <tr>
               <th>Weight <small>(pounds)</small></th>
               <td><?php echo e($carving->weight ?? "N/A"); ?></td>
            </tr>

            <tr>
               <th>Price</th>
                  <?php if(auth()->guard()->check()): ?>
                     <td>
                        
                        <?php if($carving->price): ?>
                           $ <?php echo e($carving->price); ?>

                        <?php else: ?>
                           <a href="<?php echo e(Route('contact')); ?>">Contact us for details</a>
                        <?php endif; ?>
                     </td>
                  <?php else: ?>
                     <td>Login for details</td>
                  <?php endif; ?>
            </tr>
            <tr>
               <th>Likes</th>
               <td><?php echo e($carving->likes()->count()); ?></td>
            </tr>
         </tbody>
      </table>
   </div>

</div>
<?php /**PATH C:\sites\l7\resources\views/UI/carvings/show/information.blade.php ENDPATH**/ ?>