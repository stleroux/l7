<button type="button"
   class="restore-model btn btn-sm btn-default"
   data-toggle="modal"
   data-target="#restoreModal"
   data-id="<?php echo e($material->id); ?>"
   data-url="<?php echo e(url('admin/materials/restore', $material)); ?>"
   title="Restore Material"
   >
   <i class="<?php echo e(config('icons.restore')); ?> text-primary"></i>
</button>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/materials/actions/grid/restore.blade.php ENDPATH**/ ?>