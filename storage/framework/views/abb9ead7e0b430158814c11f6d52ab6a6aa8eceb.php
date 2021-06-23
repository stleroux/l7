
   
   

   
   <nav class="main-header navbar navbar-expand navbar-white navbar-light">

   
  <!-- Navbar -->
            <!-- Left navbar links -->
            <?php echo $__env->make('layouts.admin.navbar.left', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- SEARCH FORM -->
            <?php echo $__env->make('admin.search.quickSearch', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
               <!-- Messages Dropdown Menu -->
               <?php echo $__env->make('layouts.admin.navbar.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               <!-- Notifications Dropdown Menu -->
               <?php echo $__env->make('layouts.admin.navbar.notifications', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               <!-- My Links Dropdown Menu -->
               <?php echo $__env->make('layouts.common.navbar.myLinks', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               <!-- User Dropdown Menu -->               
               <?php echo $__env->make('layouts.common.navbar.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               <!-- Button to show right sidebar -->
               <li class="nav-item">
                  <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                     <i class="fas fa-th-large"></i>
                  </a>
               </li>
            </ul>
         </nav>
         <!-- /.navbar -->
</nav><?php /**PATH C:\sites\l7\resources\views/layouts/admin/navbar/topNavbar.blade.php ENDPATH**/ ?>