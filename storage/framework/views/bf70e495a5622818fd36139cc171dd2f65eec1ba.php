<!DOCTYPE html>
<html>
   <head>
      <?php echo $__env->make('layouts.common.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->yieldContent('stylesheet'); ?>
   </head>

   <body>
      <?php echo $__env->make('layouts.UI.navbar.topNavbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <div class="container-fluid">

         <?php if(View::hasSection('pageHeader')): ?>
            <div class="row mt-5 pt-4 card-trans-6 mb-2">
            
               <div class="col-xl-6 offset-xl-1">
                  <h1 class="d-flex text-center">
                     <?php echo $__env->yieldContent('pageHeader'); ?>
                  </h1>
               </div>
               
               <div class="d-none d-sm-block col-4 text-right">
                  <?php if(Route::currentRouteName() != '/'): ?>
                     <?php echo $__env->make('layouts.UI.common.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  <?php endif; ?>
               </div>
            </div>
         <?php endif; ?>

<div class="row <?php echo e((!View::hasSection('pageHeader')) ? ' mt-5 pt-4' : ''); ?>">
   <div class="col">
      

         
               <?php echo $__env->yieldContent('content'); ?>
            </div>
   </div>

         <?php echo $__env->make('layouts.UI.common.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      </div>

      <!-- Scripts -->
      <?php echo $__env->make('layouts.common.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      
   </body>

</html>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/layouts/UI/app-fw.blade.php ENDPATH**/ ?>