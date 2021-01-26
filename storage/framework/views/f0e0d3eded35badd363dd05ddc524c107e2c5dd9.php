<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('faq-manage')): ?>
   <button type="button"
      class="restore-model btn btn-sm btn-default"
      data-toggle="modal"
      data-target="#restoreModal"
      data-id="<?php echo e($faq->id); ?>"
      data-url="<?php echo e(url('admin/faqs/restore', $faq)); ?>"
      title="Restore Question">
      <i class="<?php echo e(config('icons.restore')); ?> text-primary"></i>
      
   </button>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/faqs/actions/grid/restore.blade.php ENDPATH**/ ?>