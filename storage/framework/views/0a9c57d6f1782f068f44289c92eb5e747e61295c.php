<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('carving-create')): ?>
   <a href="<?php echo e(route('admin.carvings.create')); ?>" class="btn btn-block btn-outline-success" title="Create Carving">
      <i class="<?php echo e(config('icons.add')); ?>"></i>
      <div class="d-none d-lg-inline">
         Create Carving
      </div>
   </a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/carvings/index/actions/common/create.blade.php ENDPATH**/ ?>