<div class="card mb-2 card-trans-4">

	<div class="card-header block_header p-2">
      <i class="fa fa-fw fa-search"></i>
      Search Blog Entries
	</div>
	
   <div class="card-body p-2">
      <form action="<?php echo e(route('blog.search')); ?>" method="POST">
         <?php echo csrf_field(); ?>
         <div class="row px-2">
            <div class="col px-0">
               <div class="form-group mb-2">
                  <input type="text" name="search" class="form-control form-control-sm">
               </div>
               <div class="form-group mb-0">
                  <button type="submit" name="submit" class="btn btn-sm btn-primary btn-block">
                     <i class="fa fa-search"></i>
                     Search
                  </button>
               </div>
            </div>
         </div>
		</form>
   </div>

</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/UI/blog/blocks/search.blade.php ENDPATH**/ ?>