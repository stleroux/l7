<!-- CANNOT use a link here, must use a button -->
<button
   type="button"
   class="delete-model btn btn-sm btn-default"
   data-toggle="modal"
   data-target="#deleteModal"
   data-id="<?php echo e($finish->id); ?>"
   data-url="<?php echo e(url('admin/finishes/delete', $finish->id)); ?>"
   title="Delete Finish Permanently">
   <i class="<?php echo e(config('icons.delete')); ?> text-danger"></i>
</button>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/finishes/actions/grid/delete.blade.php ENDPATH**/ ?>