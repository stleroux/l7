<a href="<?php echo e(route('admin.materials.index')); ?>"
   class="btn btn-block btn-default">
   <i class="<?php echo e(config('icons.back')); ?>"></i>
   Back
</a>

<div class="card card-primary mt-2">
   <div class="card-header p-2">Actions</div>
   <div class="card-body p-1">

      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('material-create')): ?>
         <a href="<?php echo e(route('admin.materials.edit', $material->id)); ?>" class="btn btn-block btn-outline-primary">
            <i class="<?php echo e(config('icons.edit')); ?>"></i>
            Edit Material
         </a>
      <?php endif; ?>
      
   </div>
</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/materials/show/sections/functions/actions.blade.php ENDPATH**/ ?>