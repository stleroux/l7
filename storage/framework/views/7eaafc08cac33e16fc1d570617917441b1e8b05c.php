<!DOCTYPE html>
<html>
   <head>
      <?php echo $__env->make('layouts.common.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->yieldContent('stylesheet'); ?>
   </head>

   <body>
      <?php echo $__env->make('layouts.UI.navbar.topNavbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <div class="container-fluid">

         <div class="row mt-5 pt-4 card-trans-6 mb-2">
            <div class="col-6 offset-xl-1">
               <h1 class="d-flex text-center justify-content-sm-start">
                  <?php echo $__env->yieldContent('pageHeader'); ?>
               </h1>
            </div>
            <div class="d-none d-sm-block col-4">
               <?php echo $__env->make('layouts.UI.common.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="col-1"></div>
         </div>

         <div class="row">
            <div class="col-xl-10 offset-xl-1">
               <?php echo $__env->yieldContent('content'); ?>
            </div>
         </div>
      
         <?php echo $__env->make('layouts.UI.common.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      
      </div><!-- /.container-fluid -->

      <!-- Scripts -->
      <?php echo $__env->make('layouts.common.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   </body>
</html>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/layouts/UI/app-10.blade.php ENDPATH**/ ?>