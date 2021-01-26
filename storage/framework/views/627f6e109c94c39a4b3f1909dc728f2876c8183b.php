<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
   
   <a class="navbar-brand" href="/">TheWoodBarn.ca</a>
   
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
   </button>

   <div class="collapse navbar-collapse" id="navbarCollapse">
      <?php echo $__env->make('layouts.UI.navbar.left.navbarLeft', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('layouts.UI.navbar.search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('layouts.UI.navbar.center.navbarCenter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('layouts.UI.navbar.right.navbarRight', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   </div>
</nav><?php /**PATH /home/lerouxs/sites/l7/resources/views/layouts/UI/navbar/topNavbar.blade.php ENDPATH**/ ?>