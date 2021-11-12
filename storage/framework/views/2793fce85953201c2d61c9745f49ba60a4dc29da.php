


<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('invoicer-invoice')): ?>
   <a href="<?php echo e(route('admin.invoicer.invoices.create', ['type'=>'estimate'])); ?>" class="btn btn-sm btn-block btn-link border mt-2" title="Create Estimate">
      <!-- <i class="<?php echo e(config('icons.add')); ?>"></i> -->
      Create Estimate
   </a>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('invoicer-invoice')): ?>
   <a href="<?php echo e(route('admin.invoicer.invoices.create')); ?>" class="btn btn-sm btn-block btn-link border mt-2" title="Create Invoice">
      <!-- <i class="<?php echo e(config('icons.add')); ?>"></i> -->
      Create Invoice
   </a>
<?php endif; ?>



<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('invoicer-product')): ?>
   <a href="<?php echo e(route('admin.invoicer.products.create')); ?>" class="btn btn-sm btn-block btn-link border" title="Create Product">
      <!-- <i class="<?php echo e(config('icons.add')); ?>"></i> -->
      Create Product
   </a>
<?php endif; ?>

<hr class="bg-success">

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('bug-create')): ?>
   <a href="<?php echo e(route('admin.bugs.create')); ?>" class="btn btn-sm btn-block btn-link border" target="_blank" title="Report Bug">
      <!-- <i class="<?php echo e(config('icons.add')); ?>"></i> -->
      Report a Bug
   </a>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('carving-create')): ?>
   <a href="<?php echo e(route('admin.carvings.create')); ?>" class="btn btn-sm btn-block btn-link border" target="_blank" title="Create Tag">
      <!-- <i class="<?php echo e(config('icons.add')); ?>"></i> -->
      Create Carving
   </a>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('faq-create')): ?>
   <a href="<?php echo e(route('admin.faqs.create')); ?>" class="btn btn-sm btn-block btn-link border" target="_blank" title="Create Question">
      <!-- <i class="<?php echo e(config('icons.add')); ?>"></i> -->
      Create FAQ Question
   </a>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('feature-create')): ?>
   <a href="<?php echo e(route('admin.features.create')); ?>" class="btn btn-sm btn-block btn-link border" target="_blank" title="Request Feature">
      <!-- <i class="<?php echo e(config('icons.add')); ?>"></i> -->
      Request a Feature
   </a>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('finish-create')): ?>
   <a href="<?php echo e(route('admin.finishes.create')); ?>" class="btn btn-sm btn-block btn-link border" target="_blank" title="Create Finish">
      <!-- <i class="<?php echo e(config('icons.add')); ?>"></i> -->
      Create Finish
   </a>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('material-create')): ?>
   <a href="<?php echo e(route('admin.materials.create')); ?>" class="btn btn-sm btn-block btn-link border" target="_blank" title="Create Material">
      <!-- <i class="<?php echo e(config('icons.add')); ?>"></i> -->
      Create Material
   </a>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('post-create')): ?>
   <a href="<?php echo e(route('admin.posts.create')); ?>" class="btn btn-sm btn-block btn-link border" target="_blank" title="Create Post">
      <!-- <i class="<?php echo e(config('icons.add')); ?>"></i> -->
      Create Post
   </a>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('project-create')): ?>
   <a href="<?php echo e(route('admin.projects.create')); ?>" class="btn btn-sm btn-block btn-link border" target="_blank" title="Create Project">
      <!-- <i class="<?php echo e(config('icons.add')); ?>"></i> -->
      Create Project
   </a>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('recipe-create')): ?>
   <a href="<?php echo e(route('admin.recipes.create')); ?>" class="btn btn-sm btn-block btn-link border" target="_blank" title="Create Recipe">
      <!-- <i class="<?php echo e(config('icons.add')); ?>"></i> -->
      Create Recipe
   </a>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-create')): ?>
   <a href="<?php echo e(route('admin.roles.create')); ?>" class="btn btn-sm btn-block btn-link border" target="_blank" title="Create Role">
      <!-- <i class="<?php echo e(config('icons.add')); ?>"></i> -->
      Create Role
   </a>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('tag-create')): ?>
   <a href="<?php echo e(route('admin.tags.create')); ?>" class="btn btn-sm btn-block btn-link border" target="_blank" title="Create Tag">
      <!-- <i class="<?php echo e(config('icons.add')); ?>"></i> -->
      Create Tag
   </a>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-create')): ?>
   <a href="<?php echo e(route('admin.users.create')); ?>" class="btn btn-sm btn-block btn-link border" target="_blank" title="Create User">
      <!-- <i class="<?php echo e(config('icons.add')); ?>"></i> -->
      Create User
   </a>
<?php endif; ?>

<?php /**PATH C:\sites\l7\resources\views/layouts/admin/sidebars/right/popout.blade.php ENDPATH**/ ?>