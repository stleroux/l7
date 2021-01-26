<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('category-edit')): ?>
   <a href="<?php echo e(route('admin.categories.edit', $category)); ?>" class="btn btn-sm btn-default" title="Edit Category">
      <i class="<?php echo e(config('icons.edit')); ?> text-primary"></i>
      
   </a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/categories/actions/grid/edit.blade.php ENDPATH**/ ?>