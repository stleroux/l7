<!-- CLIENT -->

<div class="form-group <?php echo e($errors->has('client_id') ? 'has-error' : ''); ?>">
	
	<label for="client_id" class="required">Client</label>
	
	<?php if($invoice->status != 'paid'): ?>

		<select name="client_id" class="form-control">

			<option value="<?php echo e($invoice->client_id); ?>">
				<?php echo e($invoice->client->contact_name); ?>

				<?php echo e($invoice->client->email ? ' :: '.$invoice->client->email : ''); ?>

				<?php echo e($invoice->client->company_name ? ' :: '.$invoice->client->company_name : ''); ?>

			</option>

			<?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

				<option value="<?php echo e($client->id); ?>">
					<?php echo e($client->contact_name); ?>

					<?php echo e($client->email ? ' :: '.$client->email : ''); ?>

					<?php echo e($client->company_name ? ' :: '.$client->company_name : ''); ?>

				</option>
				}

			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		</select>

	<?php else: ?>

		<input
			type="text"
			readonly
			disabled
			class="form-control"
			value="<?php echo e($invoice->client->contact_name); ?>

					 <?php echo e($invoice->client->email ? ' :: '.$invoice->client->email : ''); ?>

					 <?php echo e($invoice->client->company_name ? ' :: '.$invoice->client->company_name : ''); ?>

			"
		>
	<?php endif; ?>

	<span class="text-danger"><?php echo e($errors->first('client_id')); ?></span>

</div>
<?php /**PATH C:\sites\l7\resources\views/admin/invoicer/invoices/edit/fields/client.blade.php ENDPATH**/ ?>