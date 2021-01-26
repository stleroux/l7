<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('faq-delete')): ?>
   <button type="button"
      class="destroy-model btn btn-sm btn-default"
      data-toggle="modal"
      data-target="#destroyModal"
      data-id="<?php echo e($faq->id); ?>"
      data-url="<?php echo e(url('admin/faqs', $faq->id)); ?>"
      title="Trash Question">
      <i class="<?php echo e(config('icons.trash')); ?> text-pink"></i>
      
   </button>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/faqs/actions/grid/destroy.blade.php ENDPATH**/ ?>