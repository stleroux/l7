<!DOCTYPE html>
<html>
   <head>
      <?php echo $__env->make('layouts.common.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   </head>

   <body>

      <wrapper class="d-flex flex-column min-vh-100">

         <?php echo $__env->make('layouts.UI.navbar.topNavbarDouble', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

         <main class="container-fluid flex-fill">

            <div class="row card-trans-6 pt-2 pb-1 mb-2">
               <div class="col-12 col-md-4 offset-md-1">
                  <h3>
                     <?php echo $__env->yieldContent('pageHeader'); ?>
                  </h3>
               </div>
               <div class="col-12 col-md-6 align-middle text-right pt-2">
                  <?php echo $__env->make('layouts.UI.common.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               </div>
            </div>

            <div class="row">
               <div class="col-xl-8 offset-xl-2">
                  <?php echo $__env->yieldContent('content'); ?>
               </div>
            </div>
      
         </main>

         <?php echo $__env->make('layouts.UI.common.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

         <!-- Scripts -->
         <?php echo $__env->make('layouts.common.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      </wrapper>
      
   </body>
</html>
<?php /**PATH C:\sites\l7\resources\views/layouts/UI/app-8.blade.php ENDPATH**/ ?>