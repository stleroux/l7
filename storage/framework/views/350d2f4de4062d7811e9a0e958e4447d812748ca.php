

<?php if(app('router')->getRoutes()->match(app('request')->create(url()->previous()))->getName() == "admin.recipes.show"): ?>
   <a href="<?php echo e(url()->previous()); ?>" class="btn btn-block btn-default" title="Previous">
      <i class="<?php echo e(config('icons.previous')); ?>"></i>
      <div class="d-none d-lg-inline">
         Previous
      </div>
   </a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/recipes/edit/actions/previous.blade.php ENDPATH**/ ?>