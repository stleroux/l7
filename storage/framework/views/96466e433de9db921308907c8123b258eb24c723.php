

<form action="<?php echo e(route('admin.quickSearch')); ?>" method="POST" class="form-inline ml-3">
   <?php echo csrf_field(); ?>

   <div class="input-group input-group-sm border">
      <input type="text" name="query" class="form-control form-control-navbar" placeholder="Quick Search" aria-label="Search">
      <div class="input-group-append">
         <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
         </button>
      </div>
   </div>
</form>
<?php /**PATH C:\sites\l7\resources\views/admin/search/quickSearch.blade.php ENDPATH**/ ?>