

<div class="form-inline float-right p-0 m-0">
	
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('like', $model)): ?>
    <form class="p-0 m-0" action="<?php echo e(route('like')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="likeable_type" value="<?php echo e(get_class($model)); ?>"/>
        <input type="hidden" name="id" value="<?php echo e($model->id); ?>"/>
        <button class="btn btn-sm btn-success"><?php echo app('translator')->get('Like'); ?></button>
    </form>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('unlike', $model)): ?>
    <form class="" action="<?php echo e(route('unlike')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <input type="hidden" name="likeable_type" value="<?php echo e(get_class($model)); ?>"/>
        <input type="hidden" name="id" value="<?php echo e($model->id); ?>"/>
        <button class="btn btn-sm btn-danger"><?php echo app('translator')->get('Unlike'); ?></button>
    </form>
<?php endif; ?>

</div><?php /**PATH C:\sites\l7\resources\views/common/like.blade.php ENDPATH**/ ?>