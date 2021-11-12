<!DOCTYPE html>
<html>
   <head>
      <?php echo $__env->make('layouts.common.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   </head>

   <body>
      
      <wrapper class="d-flex flex-column min-vh-100">
         
         <?php echo $__env->make('layouts.UI.navbar.topNavbarDouble', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

         <main class="container-fluid py-3 flex-fill">

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
      
         </main>
         
         <?php echo $__env->make('layouts.UI.common.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

         <!-- Scripts -->
         <?php echo $__env->make('layouts.common.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      </wrapper>

   </body>
</html>
<?php /**PATH C:\sites\l7\resources\views/layouts/UI/homepage.blade.php ENDPATH**/ ?>