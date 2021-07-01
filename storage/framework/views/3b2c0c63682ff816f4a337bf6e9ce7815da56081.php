

<?php $__env->startSection('stylesheet'); ?>
   <link rel="stylesheet" href="<?php echo e(asset('css/UI/woodbarn.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.cart')); ?>"></i>
   Cart
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
   <li class="breadcrumb-item">Cart</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
   
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
   
   <div class="card">
      <div class="card-body">
         <?php if(Cart::count()): ?>
            <table class="table table-sm table-hover">
               <thead class="thead-dark">
                  <tr>
                     
                     
                     <th scope="col">Product</th>
                     <th scope="col">Qty</th>
                     
                     
                  </tr>
               </thead>

               <tbody>
                  <?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                     
                     
                     <td class="col">
                        <p><strong><?php echo e($row->name); ?></strong></p>
                        <p><?php echo e(($row->options->has('size') ? $row->options->size : '')); ?></p>
                     </td>
                     <td>
                        <div class="form form-inline">
                           <form>
                              <input type="number" value="<?php echo e($row->qty); ?>" name="quantity" class="form-control form-control-sm col-4">
                              <button type="submit" formaction="<?php echo e(route('cart.update', $row->rowId)); ?>" class="btn btn-xs btn-success">Update</button>
                              <button type="submit" formaction="<?php echo e(route('cart.remove', $row->rowId)); ?>" class="btn btn-xs btn-danger">Delete</button>
                           </form>
                        </div>
                     </td>
                     
                     
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </tbody>

               <tfoot>
                  
               </tfoot>
            </table>

            <a href="<?php echo e(route('cart.createQuote')); ?>" class="btn btn-sm btn-success">Submit Quote Request</a>
            <a href="<?php echo e(route('cart.destroy')); ?>" class="btn btn-sm btn-default">Clear Cart</a>

         <?php else: ?>
            <?php echo e(config('settings.noRecordsFound')); ?>

         <?php endif; ?>

      </div>

      <div class="card-footer">
         <?php if(auth()->guard()->check()): ?>
            Once the quote request is received and reviewed, someone will get in touch to discuss the details of your request.
         <?php else: ?>
            Create an account to be able to submit a quote request.
         <?php endif; ?>
      </div>
   </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.UI.app-8', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/UI/cart.blade.php ENDPATH**/ ?>