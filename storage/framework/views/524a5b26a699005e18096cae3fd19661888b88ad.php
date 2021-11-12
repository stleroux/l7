

<?php echo $__env->make('admin.permissions.index.sections.stylesheet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.permissions.index.sections.pageHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.permissions.index.sections.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.permissions.index.sections.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.permissions.index.sections.formBegin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.permissions.index.sections.formEnd', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('addition'); ?>
   <?php if(Route::currentRouteName() == 'admin.permissions.index'): ?>
      
         <?php echo $__env->make('common.form_submission_error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.permissions.create.single', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.permissions.create.multiple', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.permissions.create.crud', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.permissions.create.bread', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      
   <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

   

   

      

         <div class="card mb-3">
            <div class="card-body p-3">
               <?php echo $__env->make('admin.permissions.index.grid', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               <?php echo $__env->make('admin.permissions.index.sections.blocks', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
         </div>
      

   
   
   <?php echo $__env->make('modals.destroy',       ['modelName'=>'permission'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('modals.massDestroy',   ['modelName'=>'permission'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('modals.restore',       ['modelName'=>'permission'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('modals.massRestore',   ['modelName'=>'permission'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('modals.delete',        ['modelName'=>'permission'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('modals.massDelete',    ['modelName'=>'permission'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.permissions.help', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

   <!-- Needed in Permissions Index to allow dynamically adding row to the Multiple permissions section -->
   <script type="text/javascript">
      $('.addRow').on('click', function(){
         addRow();
      });

      function addRow(){
      // alert('test');
         var tr = '<tr>'+
            '<td>'+
               '<input type="text" name="permName[]" class="form-control form-control-sm" placeholder="Minimum 3 characters">'+
               '<div class="pl-1 bg-danger"><?php echo e($errors->first('permName')); ?></div>'+
            '</td>'+
            '<td><input type="text" name="permDescription[]" class="form-control form-control-sm"></td>'+
            '<td class="text-center"><a href="#" class="btn btn-sm btn-danger remove"><i class="far fa-minus-square"></i></a></td>'+
            '</tr>';

         $('#permissions').append(tr);
      };

      $('tbody').on('click', '.remove', function(){
         $(this).parent().parent().remove();
      });

   </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.admin-7-2-3', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/admin/permissions/index.blade.php ENDPATH**/ ?>