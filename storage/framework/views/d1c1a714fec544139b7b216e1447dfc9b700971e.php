<div class="card">

	<div class="card-header">
		Best Clients
		<span class="float-right"><small><b>Total :</b> <?php echo e($bestClients->count()); ?></small></span>
	</div>
	
	<table class="table table-hover table-sm mb-0">
		<thead>
			<tr>
				<th></th>
				<th class="text-right">Logged</th>
				<th class="text-right">Invoiced</th>
				<th class="text-right">Paid</th>
				
				<th class="text-right">Owed</th>
			</tr>
		</thead>

		<?php $__currentLoopData = $bestClients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td>
					<a href="<?php echo e(route('admin.users.show', $client->id)); ?>">
						<?php echo e($client->contact_name); ?>

						<?php echo e(($client->company_name) ? ' [' . $client->company_name . ']' : ''); ?>

					</a>
				</td>
				<!-- LOGGED -->
				<td>
					<div class="float-right">
						<?php echo e(number_format($amount = DB::table('invoicer__invoices')->where('client_id', '=', $client->id)->where('status','logged')->sum('sub_total'), 2, '.', ', ')); ?>$
					</div>
				</td>
				<!-- INVOICED -->
				<td>
					<div class="float-right">
						<?php echo e(number_format($amount = DB::table('invoicer__invoices')->where('client_id', '=', $client->id)->where('status','invoiced')->sum('sub_total'), 2, '.', ', ')); ?>$
					</div>
				</td>
				<!-- PAID -->
				<td>
					<div class="float-right">
						<?php echo e(number_format($amount = DB::table('invoicer__invoices')->where('client_id', '=', $client->id)->where('status','paid')->sum('sub_total'), 2, '.', ', ')); ?>$
					</div>
				</td>
				<!-- GROSS -->
				
				<!-- OWED -->
				<td>
					<div class="float-right">
						<?php echo e(number_format($amount = DB::table('invoicer__invoices')->where('client_id', '=', $client->id)->sum('total'), 2, '.', ', ')); ?>$
					</div>
				</td>
			</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>


	
</div><?php /**PATH C:\sites\l7\resources\views/admin/invoicer/dashboard/inc/bestClients.blade.php ENDPATH**/ ?>