<div class="row mb-2">

   <div class="col">
   </div>

   <div class="col">

      <div class="float-right">
			<a href="<?php echo e(route('admin.invoicer.invoices.edit', $invoice->id)); ?>" class="btn btn-sm btn-outline-secondary">
				<i class="fa fa-backward"></i>
				Cancel
			</a>
			<button type="submit" name="submit" class="btn btn-sm btn-primary">
				<i class="<?php echo e(config('icons.save')); ?>"></i>
				Add Billable
			</button>
		</div>

	</div>

</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/invoicer/invoiceItems/create/topbar.blade.php ENDPATH**/ ?>