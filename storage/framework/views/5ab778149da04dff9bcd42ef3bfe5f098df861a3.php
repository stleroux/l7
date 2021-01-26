<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('faq-edit')): ?>
   <a href="<?php echo e(route('admin.faqs.edit', $faq)); ?>" class="btn btn-sm btn-default" title="Edit faq">
      <i class="<?php echo e(config('icons.edit')); ?> text-primary"></i>
      
   </a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/faqs/actions/grid/edit.blade.php ENDPATH**/ ?>