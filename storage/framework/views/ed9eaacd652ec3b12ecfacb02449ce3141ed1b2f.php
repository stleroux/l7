<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('post-manage')): ?>
   <button type="button"
      class="resetViews-model btn btn-sm btn-default"
      data-toggle="modal"
      data-target="#resetViewsModal"
      data-id="<?php echo e($post->id); ?>"
      data-url="<?php echo e(url('admin/posts/resetViews', $post)); ?>"
      title="Reset Post Views"
      >
      <i class="<?php echo e(config('icons.resetViews')); ?> text-secondary"></i>
      
   </button>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/posts/actions/grid/resetViews.blade.php ENDPATH**/ ?>