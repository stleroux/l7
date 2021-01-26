<button type="button"
     class="restore-model btn btn-sm btn-default"
     data-toggle="modal"
     data-target="#restoreModal"
     data-id="<?php echo e($category->id); ?>"
     data-url="<?php echo e(url('admin/categories/restore', $category)); ?>"
     title="Restore Category"
     >
     <i class="<?php echo e(config('icons.restore')); ?> text-primary"></i>
     
</button>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/categories/actions/grid/restore.blade.php ENDPATH**/ ?>