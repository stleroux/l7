<div class="row mb-2">

   <div class="col">
   </div>

   <div class="col">

      <div class="float-right">
			
			<a href="<?php echo e(route('admin.invoicer.invoices.edit', $item->invoice->id)); ?>" class="btn btn-sm btn-outline-secondary">
				<i class="fa fa-backward"></i>
				Cancel
			</a>

			<button type="submit" name="save" class="btn btn-sm btn-primary">
				<i class="<?php echo e(config('icons.save')); ?>"></i>
				Update Billable
			</button>

		</div>

	</div>

</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/invoicer/invoiceItems/edit/topbar.blade.php ENDPATH**/ ?>