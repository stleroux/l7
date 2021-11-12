<?php if(!env('APP_ENV') === 'local'): ?>
   <nav class="navbar-expand-lg navbar-dark bg-dark">
<?php else: ?>
   <nav class="navbar-expand-lg navbar-light bg-light">
<?php endif; ?>
   
   <div class="row">
   
      <div class="col ml-4">
         <a class="navbar-brand" href="/">
            <div class="font-weight-bold">
               <?php if(!env('APP_ENV') === 'local'): ?>
                  <div class="text-danger driftwood-font">
                     TheWoodBarn.ca
                  </div>
               <?php else: ?>
                  <div class="text-dark driftwood-font">
                     TheWoodBarn.ca
                  </div>
               <?php endif; ?>
            </div>
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
      </div>
      <div class="col float-right pt-2">
         <?php echo $__env->make('layouts.UI.navbar.search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
   </div>

   <div class="row-col collapse navbar-collapse bg-dark" id="navbarCollapse">
      
         <?php echo $__env->make('layouts.UI.navbar.left.navbarLeft', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      
   </div>

   
   <div class="row-col justify-content-center collapse navbar-collapse" id="navbarCollapse">
      
      
         <?php echo $__env->make('layouts.UI.navbar.right.navbarRight', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>         
      
   </div>
</nav><?php /**PATH C:\sites\l7\resources\views/layouts/UI/navbar/topNavbarDouble.blade.php ENDPATH**/ ?>