<div class="card card-outline card-info">

   <div class="card-header bg-primary">
      <div class="card-title font-weight-bold">
         <i class="<?php echo e(config('icons.info')); ?>"></i>
         Information
      </div>
   </div>

   <div class="card-body p-0">
      <table class="table table-hover table-striped text-dark">
         <tbody class="">
            <tr>
               <th>Category</th>
               <td><?php echo e($carving->category); ?></td>
            </tr>
            <tr>
               <th>Frontend Views</th>
               <td><?php echo e($carving->views ?? "N/A"); ?></td>
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
         </tbody>
      </table>
   </div>

</div>
<?php /**PATH C:\sites\l7\resources\views/UI/carvings/show/information.blade.php ENDPATH**/ ?>