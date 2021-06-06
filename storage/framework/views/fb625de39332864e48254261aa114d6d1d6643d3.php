

<div class="form-row">
   <div class="col-xl-8">
      <div class="card">
         <div class="card-header">General Information</div>
         <div class="card-body">
            <div class="form-row">
               <div class="col-xl-6">
                  <?php echo $__env->make('admin.movies.fields.title', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               </div>
               <div class="col-xl-3">
                  <?php echo $__env->make('admin.movies.fields.genre', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               </div>
               <div class="col-xl-3">
                  <?php echo $__env->make('admin.movies.fields.col_no', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               </div>
            </div>
            <div class="form-row">
               <div class="col">
                  <?php echo $__env->make('admin.movies.fields.overview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               </div>
            </div>
         </div>
      </div>      
   </div>
   <div class="col-xl-4">
      <div class="card">
         <div class="card-header">Other Information</div>
         <div class="card-body">
            <div class="form-row">
               <div class="col-3">
                  <?php echo $__env->make('admin.movies.fields.running_time', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               </div>
               <div class="col">
                  <?php echo $__env->make('admin.movies.fields.studio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               </div>
            </div>
            <div class="form-row">
               <div class="col-3">
                  <?php echo $__env->make('admin.movies.fields.imdb_no', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               </div>
               <div class="col">
                  <?php echo $__env->make('admin.movies.fields.upc', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               </div>
               <div class="col">
                  <?php echo $__env->make('admin.movies.fields.rating', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               </div>
            </div>
            <div class="form-row">
               <div class="col">
                  <?php echo $__env->make('admin.movies.fields.production_year', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               </div>
               <div class="col">
                  <?php echo $__env->make('admin.movies.fields.released', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

   <!-- COLLECTION NUMBER -->
   

<?php /**PATH C:\sites\l7\resources\views/admin/movies/form.blade.php ENDPATH**/ ?>