<?php
   if($modelName == 'finish'){
      $routeName = 'admin.finishes.printPDF';
   } else {
      $routeName = 'admin.'.$modelName.'s.printPDF';
   }
?>

<a href="<?php echo e(route($routeName, $model->id)); ?>"
   class="btn btn-block btn-default"
   title="Print <?php echo e(ucfirst($modelName)); ?> to PDF">
   <i class="<?php echo e(config('icons.pdf')); ?>"></i>
   <div class="d-none d-lg-inline">
      Print to PDF
   </div>
</a>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/actions/common/printToPDF.blade.php ENDPATH**/ ?>