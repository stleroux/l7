<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('faq-create')): ?>
   <a href="<?php echo e(route('admin.faqs.create')); ?>" class="btn btn-block btn-outline-success" title="Create Question">
      <i class="<?php echo e(config('icons.add')); ?>"></i>
      <div class="d-none d-lg-inline">
         Create Question
      </div>
   </a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/faqs/actions/common/create.blade.php ENDPATH**/ ?>