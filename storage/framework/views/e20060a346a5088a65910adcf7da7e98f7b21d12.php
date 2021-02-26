

<?php if($notification->type === 'App\Notifications\Invoicer\PaymentAddNotification'): ?>

	<td>
		A <?php echo e($notification->data['title']); ?> of $<?php echo e($notification->data['amount']); ?>

		was applied to
		<a href="<?php echo e(route('admin.invoicer.invoices.show', $notification->data['invoiceNo'])); ?>">
			invoice # <?php echo e($notification->data['invoiceNo']); ?>

		</a>
		for
		<a href="<?php echo e(route('admin.invoicer.clients.show', $client->id)); ?>">
			<?php echo e(ucwords($client->contact_name)); ?> <?php echo e(($client->company_name ? '[' . ucwords($client->company_name) . ']' : '')); ?>

		</a>
	</td>

	<td>
		<?php echo e($notification->created_at->format(config('settings.dateFormat'))); ?>

	</td>
	
	<td class="text-right">
		<?php echo $__env->make('admin.notifications.actions.grid', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</td>

<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/notifications/type/paymentAdd.blade.php ENDPATH**/ ?>