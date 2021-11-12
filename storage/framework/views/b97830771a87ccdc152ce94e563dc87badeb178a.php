<div class="row mb-2">

   <div class="col">
   </div>

   <div class="col">

      <div class="float-right">

<?php
// $previousRoute = Session::get('previous-route');
// dd($previousRoute);
?>
<a href="<?php echo e(route('admin.invoicer.invoices.edit', [$invoice, 'type'=>$invoice->status])); ?>" class="btn btn-sm btn-warning">
<i class="<?php echo e(config('icons.back')); ?>"></i>
Cancel
</a>

	      
         





         <button type="submit" name="submit" class="btn btn-sm btn-primary">
            <i class="<?php echo e(config('icons.invoicer-newActivity')); ?>"></i>
            Register Activity
         </button>

      </div>

   </div>

</div>
<?php /**PATH C:\sites\l7\resources\views/admin/invoicer/activities/create/topbar.blade.php ENDPATH**/ ?>