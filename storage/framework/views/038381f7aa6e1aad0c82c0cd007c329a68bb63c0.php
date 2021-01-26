<!-- PROJECTS -->

<?php if(Auth::user()->can('project-manage') || Auth::user()->hasRole('admin')): ?>

   <div class="col">
      <a href="<?php echo e(route('admin.projects.index')); ?>">
         <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1">
               <i class="<?php echo e(config('icons.projects')); ?>"></i>
            </span>

            <div class="info-box-content">
               <span class="info-box-text h4">Projects</span>
               <span class="info-box-number">
                  
                  Total : <?php echo e($projectsCount); ?>

               </span>
            </div><!-- /.info-box-content -->
         </div><!-- /.info-box -->
      </a>
   </div><!-- /.col -->

<?php endif; ?><?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/dashboard/infoBoxes/projects.blade.php ENDPATH**/ ?>