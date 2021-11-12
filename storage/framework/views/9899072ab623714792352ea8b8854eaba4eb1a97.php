<!DOCTYPE html>
<html>
   <head>
      <?php echo $__env->make('layouts.common.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   </head>

   <body>

      <wrapper class="d-flex flex-column min-vh-100">

         <?php echo $__env->make('layouts.UI.navbar.topNavbarDouble', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

         <main class="container-fluid flex-fill">

            <?php if(View::hasSection('pageHeader')): ?>
               <div class="row pt-3 card-trans-6 mb-2">
                  <div class="col">
                     <h1 class="d-flex text-center">
                        <?php echo $__env->yieldContent('pageHeader'); ?>
                     </h1>
                  </div>
               </div>

               <div class="row">
                  <div class=" col-12 float-right">               
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

         </main>

         <?php echo $__env->make('layouts.UI.common.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

         <!-- Scripts -->
         <?php echo $__env->make('layouts.common.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      </wrapper>
      
   </body>

</html>
<?php /**PATH C:\sites\l7\resources\views/layouts/UI/app-fw.blade.php ENDPATH**/ ?>