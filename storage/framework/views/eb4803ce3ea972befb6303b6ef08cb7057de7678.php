

<?php $__env->startSection('stylesheet'); ?>
   <link rel="stylesheet" href="<?php echo e(asset('css/UI/carvings.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.carvings')); ?> mr-1"></i>
   Carvings
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
   <li class="breadcrumb-item">Carvings</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
   <?php echo $__env->make('UI.carvings.blocks.popular', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('UI.carvings.blocks.tags', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('UI.carvings.blocks.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('notice'); ?>
   <?php echo $__env->make('UI.carvings.index.notice', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('topbar'); ?>
   <?php echo $__env->make('UI.carvings.index.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


   <?php if(count($carvings) > 0): ?>
      
      <div class="card card-trans-2 mb-3">
      
         <div class="card-body card-trans-2 pb-0 mb-0">

            <div class="row card-trans-0 p-0 m-0 mb-0">

               <?php $__currentLoopData = $carvings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carving): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                  <div  class="col-8 offset-2 offset-sm-0 col-sm-6 col-md-4 col-lg-3 pb-2">

                     <div id="card-hover" class="card card-trans-2 h-100 w-100" style="border: 2px black solid;">

                        <div class="card-body position-relative p-0">
                           
                           <?php if($carving->created_at > \Carbon\Carbon::now()->subMonth()): ?>
                              <div class="ribbon-wrapper">
                                 <div class="ribbon bg-lime m-0">New</div>
                              </div>
                           <?php endif; ?>

                           <div class="h-100 thumbnail pt-2 text-center" >
                              <a href="<?php echo e(route('carvings.show', $carving->id)); ?>">
                              
                                 <?php if($carving->images->count() > 0): ?>
                                    <img src="/_carvings/<?php echo e($carving->id); ?>/thumbs/<?php echo e($carving->images[0]->name); ?>" alt="<?php echo e($carving->name); ?>"  height="150px" width="95%" />
                                 <?php else: ?>
                                    <img src="/images/no_image.jpg" alt="No Image" height="150px" width="95%" />
                                 <?php endif; ?>
                                 <h4 class="badge-dark p-1 m-1"><?php echo e(ucwords($carving->name)); ?></h4>
                                 
                                 <?php echo $__env->make('UI.carvings.partials.index.rows', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                 
                                 
                                 
                              </a>
                           </div>

                        </div>

                           <div class="card-footer p-0 m-0 pb-2">
                              <div class="row p-0 m-0">
                                 <div class="col-6">
                        <?php if(auth()->guard()->check()): ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('like', $carving)): ?>
                                       <form class="" action="<?php echo e(route('like')); ?>" method="POST">
                                          <?php echo csrf_field(); ?>
                                          <input type="hidden" name="likeable_type" value="<?php echo e(get_class($carving)); ?>"/>
                                          <input type="hidden" name="id" value="<?php echo e($carving->id); ?>"/>
                                          <button class="btn btn-block btn-xs btn-outline-success text-dark font-weight-bold"><?php echo app('translator')->get('Like'); ?></button>
                                       </form>
                                    <?php else: ?>
                                       <form class="" action="<?php echo e(route('unlike')); ?>" method="POST">
                                          <?php echo csrf_field(); ?>
                                          <?php echo method_field('DELETE'); ?>
                                          <input type="hidden" name="likeable_type" value="<?php echo e(get_class($carving)); ?>"/>
                                          <input type="hidden" name="id" value="<?php echo e($carving->id); ?>"/>
                                          <button class="btn btn-block btn-xs btn-outline-danger text-dark"><strong><?php echo app('translator')->get('Unlike'); ?></strong></button>
                                       </form>
                                    <?php endif; ?>
                        <?php endif; ?>
                                 </div>

                                 <div class="col-6">
                                    <form action="<?php echo e(route('cart.store', $carving)); ?>" method="POST">
                                       <?php echo csrf_field(); ?>
                                       <input type="hidden" value="1" name="quantity">
                                       <button type="submit" class="btn btn-block btn-xs btn-outline-secondary text-dark"><strong>Request a Quote</strong></button>
                                    </form>
                                 </div>

                              </div>

                           </div>

                     </div>

                  </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>

            
            
               <div class="row mb-2">
                  <div class="col ml-2 text-light">
                     Showing <?php echo e($carvings->firstItem()); ?> to <?php echo e($carvings->lastItem()); ?> of <?php echo e($carvings->total()); ?> entries
                  </div>
                  <div class="col text-right p-0 m-0">
                     <?php echo e($carvings->links('UI.carvings.pagination.custom')); ?>

                  </div>
               </div>
            
         </div>

      </div>
   <?php else: ?>
      <div class="col-row p-3 card-trans-4 text-dark">
         <?php echo e(config('settings.noRecordsFound')); ?>

      </div>
   <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.UI.app-10-2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/UI/carvings/index.blade.php ENDPATH**/ ?>