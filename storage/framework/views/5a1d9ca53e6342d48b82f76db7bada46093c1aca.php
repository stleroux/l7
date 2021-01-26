<?php $__env->startSection('stylesheet'); ?>
   <link rel="stylesheet" href="<?php echo e(asset('css/UI/woodbarn.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.movies')); ?>"></i>
   Movie :: <?php echo e($movie->title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
   <li class="breadcrumb-item"><a href="<?php echo e(route('admin.movies.index')); ?>">Movies</a></li>
<?php $__env->stopSection(); ?>


   
   
   


<?php $__env->startSection('topbar'); ?>
   <?php echo $__env->make('admin.movies.show.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  
<div class="card p-0 mb-3">
   
   <div class="card-body p-2">
      
      <div class="row">
         
         <div class="col-xl-10">
            <div class="form-row">
               <div class="col">
                  <div class="card mb-2">
                     <div class="card-header p-1 m-0">Collection No</div>
                     <div class="card-body p-1 m-0"><?php echo e($movie->col_no); ?></div>
                  </div>
               </div> <!-- end col -->
               <div class="col">
                  <div class="card mb-2">
                     <div class="card-header p-1 m-0">Views</div>
                     <div class="card-body p-1 m-0"><?php echo e($movie->views); ?></div>
                  </div>
               </div> <!-- end col -->
               <div class="col">
                  <div class="card mb-2">
                     <div class="card-header p-1 m-0">Category</div>
                     <div class="card-body p-1 m-0"><?php echo e($movie->category); ?></div>
                  </div>
               </div> <!-- end col -->
            </div> <!-- end row -->

            <div class="form-row">
               <div class="col">
                  <div class="card mb-2">
                     <div class="card-header p-1 m-0">Production Year</div>
                     <div class="card-body p-1 m-0"><?php echo e($movie->production_year); ?></div>
                  </div>
               </div> <!-- end col -->
               <div class="col">
                  <div class="card mb-2">
                     <div class="card-header p-1 m-0">Released</div>
                     <div class="card-body p-1 m-0"><?php echo e($movie->released); ?></div>
                  </div>
               </div> <!-- end col -->
               <div class="col">
                  <div class="card mb-2">
                     <div class="card-header p-1 m-0">Running Time</div>
                     <div class="card-body p-1 m-0"><?php echo e($movie->running_time); ?> minutes</div>
                  </div>
               </div> <!-- end col -->
               <div class="col">
                  <div class="card mb-2">
                     <div class="card-header p-1 m-0">IMDB N<sup>o</sup></div>
                     <div class="card-body p-1 m-0">
                        <?php if($movie->imdb_no): ?>
                           <a href="https://www.imdb.com/title/<?php echo e($movie->imdb_no); ?>" target="_blank"><?php echo e($movie->imdb_no); ?></a>
                        <?php endif; ?>
                     </div>
                  </div>
               </div> <!-- end col -->                  
            </div> <!-- end row -->

            <div class="form-row">
               <div class="col">
                  <div class="card mb-2">
                     <div class="card-header p-1 m-0">Overview</div>
                     <div class="card-body p-1 m-0"><?php echo $movie->overview; ?></div>
                  </div>
               </div> <!-- end col -->
            </div> <!-- end row -->
         </div>

         <div class="col-xl-2">
            <a href="#" class="" data-toggle="modal" data-target="#imageModal">
            <?php if(!Str::contains($movie->upc, 'Disc ID: ')): ?>
               <?php if(file_exists(public_path() . '/_movies/thumbnails/' . str_replace('-', '', $movie->upc . '.3f.jpg'))): ?>
                  <img src="\_movies\thumbnails\<?php echo e(str_replace('-', '', $movie->upc . '.3f.jpg')); ?>" />
               <?php elseif(file_exists(public_path() . '/_movies/thumbnails/' . str_replace('-', '', $movie->upc . '.2f.jpg'))): ?>
                  <img src="\_movies\thumbnails\<?php echo e(str_replace('-', '', $movie->upc . '.2f.jpg')); ?>" />
               <?php else: ?>
                  <img src="\_movies\thumbnails\<?php echo e(str_replace('-', '', $movie->upc)); ?>f.jpg" />
               <?php endif; ?>
            <?php else: ?>
               <?php if($image = Str::of(str_replace('-', '', str_replace('Disc ID: ', '', $movie->upc)))->prepend('I')): ?>
                  <img src="\_movies\thumbnails\<?php echo e(str_replace('-', '', $image . 'f.jpg')); ?>" />
               <?php endif; ?>
            <?php endif; ?>
            <?php if(!Str::contains($movie->upc, 'Disc ID: ')): ?>
               <?php if(file_exists(public_path() . '/_movies/thumbnails/' . str_replace('-', '', $movie->upc . '.3b.jpg'))): ?>
                  <img src="\_movies\thumbnails\<?php echo e(str_replace('-', '', $movie->upc . '.3b.jpg')); ?>" />
               <?php elseif(file_exists(public_path() . '/_movies/thumbnails/' . str_replace('-', '', $movie->upc . '.2b.jpg'))): ?>
                  <img src="\_movies\thumbnails\<?php echo e(str_replace('-', '', $movie->upc . '.2b.jpg')); ?>" />
               <?php else: ?>
                  <img src="\_movies\thumbnails\<?php echo e(str_replace('-', '', $movie->upc)); ?>b.jpg" />
               <?php endif; ?>
            <?php else: ?>
               <?php if($image = Str::of(str_replace('-', '', str_replace('Disc ID: ', '', $movie->upc)))->prepend('I')): ?>
                  <img src="\_movies\thumbnails\<?php echo e(str_replace('-', '', $image . 'b.jpg')); ?>" />
               <?php endif; ?>
            <?php endif; ?>
            </a>
         </div>
      </div>
   </div>
</div>

   <?php echo $__env->make('admin.movies.show.imageModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.admin-8', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/movies/show.blade.php ENDPATH**/ ?>