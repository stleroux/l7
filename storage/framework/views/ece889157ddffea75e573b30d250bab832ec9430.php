<button type="button"
     class="delete-model btn btn-sm btn-default"
     data-toggle="modal"
     data-target="#deleteModal"
     data-id="<?php echo e($category->id); ?>"
     data-url="<?php echo e(url('admin/categories/delete', $category)); ?>"
     title="Permanently Delete Category"
     >
     <i class="<?php echo e(config('icons.delete')); ?> text-danger"></i>
     
</button>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/categories/actions/grid/delete.blade.php ENDPATH**/ ?>