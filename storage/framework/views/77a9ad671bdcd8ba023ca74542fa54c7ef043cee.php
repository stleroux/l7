<div class="card card-primary">
   <div class="card-header p-2">Pages</div>
   <div class="card-body p-1">

      <a href="<?php echo e(route('admin.projects.index')); ?>"
         class="btn btn-block btn-default text-left <?php echo e(request()->routeIs('admin.projects.index') ? 'buttonActive' : ''); ?>">
         <i class="<?php echo e(config('icons.projects')); ?>"></i>
         All Projects
         <div class="badge badge-dark badge-pill float-right mt-1">
            <?php echo e(App\Models\Project::count()); ?>

         </div>
      </a>

      <a href="<?php echo e(route('admin.projects.trashed')); ?>"
         class="btn btn-block btn-default text-left <?php echo e(request()->routeIs('admin.projects.trashed') ? 'buttonActive' : ''); ?>">
         <i class="<?php echo e(config('icons.trashed')); ?> text-pink"></i>
         Trashed Projects
         <div class="badge badge-dark badge-pill float-right mt-1">
            <?php echo e(App\Models\Project::trashedCount()->count()); ?>

         </div>
      </a>
      
   </div>
</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/projects/index/blocks/pages.blade.php ENDPATH**/ ?>