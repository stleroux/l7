<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('category-delete')): ?>
   <button type="button"
      class="destroy-model btn btn-sm btn-default"
      data-toggle="modal"
      data-target="#destroyModal"
      data-id="<?php echo e($category->id); ?>"
      data-url="<?php echo e(url('admin/categories', $category)); ?>"
      title="Trash Category"
      >
      <i class="<?php echo e(config('icons.trash')); ?> text-pink"></i>
      
   </button>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/categories/actions/grid/destroy.blade.php ENDPATH**/ ?>