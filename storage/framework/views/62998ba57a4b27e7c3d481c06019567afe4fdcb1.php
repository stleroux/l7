<div class="row mb-2">

   <div class="col">
   </div>

   <div class="col">

      <div class="float-right">
			<a href="<?php echo e(route('admin.invoicer.invoices.edit', $invoice->id)); ?>" class="btn btn-sm btn-warning">
				<i class="<?php echo e(config('icons.cancel')); ?>"></i>
				Cancel
			</a>
			<button type="submit" name="submit" class="btn btn-sm btn-primary">
				<i class="<?php echo e(config('icons.invoicer-newBillable')); ?>"></i>
				Add Billable
			</button>
		</div>

	</div>

</div>
<?php /**PATH C:\sites\l7\resources\views/admin/invoicer/invoiceItems/create/topbar.blade.php ENDPATH**/ ?>