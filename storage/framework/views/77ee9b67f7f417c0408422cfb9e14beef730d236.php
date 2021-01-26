<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('faq-manage')): ?>
   <!-- CANNOT use a link here, must use a button -->
   <button type="button"
      class="delete-model btn btn-sm btn-default"
      data-toggle="modal"
      data-target="#deleteModal"
      data-id="<?php echo e($faq->id); ?>"
      data-url="<?php echo e(url('admin/faqs/delete', $faq->id)); ?>"
      title="Permanently Delete Question">
      <i class="<?php echo e(config('icons.delete')); ?> text-danger"></i>
      
   </button>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/faqs/actions/grid/delete.blade.php ENDPATH**/ ?>