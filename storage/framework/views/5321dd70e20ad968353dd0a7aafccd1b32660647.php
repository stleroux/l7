<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('faq-manage')): ?>
   <button type="button"
      class="resetViews-model btn btn-sm btn-default"
      data-toggle="modal"
      data-target="#resetViewsModal"
      data-id="<?php echo e($faq->id); ?>"
      data-url="<?php echo e(url('admin/faqs/resetViews', $faq)); ?>"
      title="Reset Question Views"
      >
      <i class="<?php echo e(config('icons.resetViews')); ?> text-secondary"></i>
      
   </button>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/faqs/actions/grid/resetViews.blade.php ENDPATH**/ ?>