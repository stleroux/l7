<a href="<?php echo e(route('admin.faqs.index')); ?>"
   class="btn btn-block btn-default">
   <i class="<?php echo e(config('icons.back')); ?>"></i>
   Back
</a>

<?php if($previous): ?>
   <a href="<?php echo e(route('admin.faqs.show', $previous)); ?>"
      class="btn btn-block btn-secondary"
      title="Previous Question">
      <i class="<?php echo e(config('icons.previous')); ?>"></i>
      Previous Question
   </a>
<?php endif; ?>

<?php if($next): ?>
   <a href="<?php echo e(route('admin.faqs.show', $next)); ?>"
      class="btn btn-block btn-secondary"
      title="Next Question">
      Next Question
      <i class="<?php echo e(config('icons.next')); ?>"></i>
   </a>
<?php endif; ?>

<div class="card card-primary mt-2">
   <div class="card-header p-2">Actions</div>
   <div class="card-body p-1">

      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('faq-edit')): ?>
         <a href="<?php echo e(route('admin.faqs.edit', $faq)); ?>" class="btn btn-block btn-outline-primary">
            <i class="<?php echo e(config('icons.edit')); ?>"></i>
            Edit
         </a>
      <?php endif; ?>

   </div>
</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/faqs/show/sections/functions/actions.blade.php ENDPATH**/ ?>