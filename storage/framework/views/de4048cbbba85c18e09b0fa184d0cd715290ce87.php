<!-- CANNOT use a link here, must use a button -->
<button
   type="button"
   class="delete-model btn btn-sm btn-default"
   data-toggle="modal"
   data-target="#deleteModal"
   data-id="<?php echo e($material->id); ?>"
   data-url="<?php echo e(url('admin/materials/delete', $material->id)); ?>"
   title="Delete Material Permanently">
   <i class="<?php echo e(config('icons.delete')); ?> text-danger"></i>
</button>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/materials/actions/grid/delete.blade.php ENDPATH**/ ?>