<!DOCTYPE html>
<html>
   <head>
      <?php echo $__env->make('layouts.common.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->yieldContent('stylesheet'); ?>
   </head>

   <body>
      <?php echo $__env->make('layouts.UI.navbar.topNavbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <div class="container-fluid">

         <div class="row mt-5 pt-3 mt-lg-5 pt-lg-5 mt-xl-4 pt-xl-5 mb-2 card-trans-4">
            <div class="col-10 offset-1">
               <h1 class="d-flex text-center">
                  <?php echo $__env->yieldContent('pageHeader'); ?>
               </h1>
            </div>
         </div>

         <div class="row">
            <div class="col-xl-10 offset-xl-1 text-right">
               <?php echo $__env->yieldContent('topbar'); ?>
            </div>
         </div>

         <div class="row">
            <div class="col-xl-8 offset-xl-1">
               <?php echo $__env->yieldContent('content'); ?>
            </div>

            <div class="col-xl-2">
               <?php echo $__env->yieldContent('rightColumn'); ?>
            </div>
         </div>
      
         <?php echo $__env->make('layouts.UI.common.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      
      </div>

               <!-- /.container-fluid -->

      <!-- Scripts -->
      <?php echo $__env->make('layouts.common.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       
   </body>
</html>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/layouts/UI/homepage.blade.php ENDPATH**/ ?>