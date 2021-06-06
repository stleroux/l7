<!DOCTYPE html>
<html>
   <head>
      <?php echo $__env->make('layouts.common.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      
      
   </head>

   
   <body class="hold-transition sidebar-mini layout-navbar-fixed layout-footer-fixed">

      <!-- Site wrapper -->
      <div class="wrapper">

         <!-- Navbar -->
         <?php echo $__env->make('layouts.admin.navbar.topNavbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <!-- ./navbar -->

         <!-- Main Sidebar Container -->
         <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <?php echo $__env->make('layouts.admin.sidebars.left.brandLogo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Sidebar -->
            <div class="sidebar">
               <!-- Sidebar user (optional) -->
               
               <!-- Sidebar Menu -->
               <nav class="mt-2">
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                     <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                     <?php echo $__env->make('layouts.admin.sidebars.left.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </ul>
               </nav>
               <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
         </aside>

         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <section class="content-header py-2">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-sm-8">
                        <h1><?php echo $__env->yieldContent('pageHeader'); ?></h1>
                     </div>
                     <div class="col-sm-4">
                        <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a></li>
                           <?php echo $__env->yieldContent('breadcrumb'); ?>
                        </ol>
                     </div>
                  </div>
               </div>
               <!-- /.container-fluid -->
            </section>

            <!-- Main content -->

            <section class="content">
               <div class="container-fluid">
                  <?php echo $__env->yieldContent('formBegin'); ?>



                  <div class="row">
                     <div class="col-xl-10">
                        <?php echo $__env->yieldContent('content'); ?>
                     </div>
                     <div class="col-xl-2">
                        <?php echo $__env->yieldContent('blocks'); ?>
                     </div>
                  </div>
                  <?php echo $__env->yieldContent('formEnd'); ?>

               <!-- Secondary content -->
               <section class="subcontent">
                  
                     <div class="row">
                        <div class="col-xl-10">
                           <?php echo $__env->yieldContent('secondary'); ?>
                        </div>
                     </div>
                  
               </section>

               </div>
            </section>
            <!-- /.content -->


         </div>
         <!-- /.content-wrapper -->

         <?php echo $__env->make('layouts.admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

         
         <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="mx-2">
               <?php echo $__env->make('layouts.admin.sidebars.right.popout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               <?php echo $__env->yieldContent('sidebar'); ?>
            </div>
         </aside>
         <!-- /.control-sidebar -->

      </div>
      <!-- ./wrapper -->

      <!-- Scripts -->
      <?php echo $__env->make('layouts.common.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      
   </body>
</html>
<?php /**PATH C:\sites\l7\resources\views/layouts/admin/admin-10-2.blade.php ENDPATH**/ ?>