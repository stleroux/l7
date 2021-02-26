<?php $__env->startSection('stylesheet'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader', 'DASHBOARD'); ?>

<?php $__env->startSection('breadcrumb'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
	<div class="col-xl-10">
		
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-xl-2">
						<?php echo $__env->make('admin.dashboard.infoBoxes.bugs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>							
					</div>
					<div class="col-xl-2">
						<?php echo $__env->make('admin.dashboard.infoBoxes.features', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>							
					</div>
					<div class="col-xl-2">
						<?php echo $__env->make('admin.dashboard.infoBoxes.audits', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					</div>
				</div>
			</div>
		</div>
		
		<div class="card">
			<div class="card-body">
				<div class="row">
         		<div class="col-xl-3">
	               <h3><?php echo e($usersPerMonthChart->options['chart_title']); ?></h3>
	             	<?php echo $usersPerMonthChart->renderHtml(); ?>

         		</div>
         		<div class="col-xl-3">
	             	<h3><?php echo e($bugsByTypeChart->options['chart_title']); ?></h3>
	             	<?php echo $bugsByTypeChart->renderHtml(); ?>

         		</div>
         		<div class="col-xl-3">
	             	<h3><?php echo e($featuresByTypeChart->options['chart_title']); ?></h3>
	             	<?php echo $featuresByTypeChart->renderHtml(); ?>

         		</div>
         		<div class="col-xl-3">
	             	<h3><?php echo e($carvingsByCategoryChart->options['chart_title']); ?></h3>
	             	<?php echo $carvingsByCategoryChart->renderHtml(); ?>

         		</div>
         	</div>
         	<div class="row">
         		<div class="col-xl-6">
         			<h3><?php echo e($recipesByCategoryChart->options['chart_title']); ?></h3>
	             	<?php echo $recipesByCategoryChart->renderHtml(); ?>

         		</div>
         		<div class="col-xl-6">
         			<h3><?php echo e($projectsByCategoryChart->options['chart_title']); ?></h3>
	             	<?php echo $projectsByCategoryChart->renderHtml(); ?>

         		</div>
         	</div>

				<div class="row">
         		<div class="col-xl-6">
         			<h3><?php echo e($billablesByItemChart->options['chart_title']); ?></h3>
	             	<?php echo $billablesByItemChart->renderHtml(); ?>

         		</div>
         	</div>
         	
			</div>
		</div>

		<div class="card">
			<div class="card-header h3">Invoicer</div>
			<div class="card-body pb-0 mb-0">
				
				<div class="row mb-0">
					
					<div class="col">
						<div class="card card-primary">
							<div class="card-header p-1 text-center">Sales</div>
							<div class="p-2 text-center">
								<?php echo e(number_format($totalSales, 2, '.', ', ')); ?>$
							</div>
						</div>
					</div>

					<div class="col">
						<div class="card card-primary">
							<div class="card-header p-1 text-center">Payments</div>
							<div class="p-2 text-center">
								<?php echo e(number_format($totalPayments, 2, '.', ', ')); ?>$
							</div>
						</div>
					</div>

					<div class="col">
						<div class="card card-primary">
							<div class="card-header p-1 text-center">Discounts</div>
							<div class="p-2 text-center">
								<?php echo e(number_format($totalDiscounts, 2, '.', ', ')); ?>$
							</div>
						</div>
					</div>

					<div class="col">
						<div class="card card-primary">
							<div class="card-header p-1 text-center">Total Owed</div>
							<div class="p-2 text-center">
								<?php echo e(number_format($totalOwed, 2, '.', ', ')); ?>$
							</div>
						</div>
					</div>

					<div class="col">
						<div class="card card-primary">
							<div class="card-header p-1 text-center">Invoices</div>
							<div class="p-2 text-center">
								<?php echo e($invoicesCount); ?>

							</div>
						</div>
					</div>

					<div class="col">
						<div class="card card-primary">
							<div class="card-header p-1 text-center">Billable Items</div>
							<div class="p-2 text-center">
								<?php echo e($billableItemsCount); ?>

							</div>
						</div>
					</div>

					<div class="col">
						<div class="card card-primary">
							<div class="card-header p-1 text-center">Clients</div>
							<div class="p-2 text-center">
								<?php echo e($clientsCount); ?>

							</div>
						</div>
					</div>

					<div class="col">
						<div class="card card-primary">
							<div class="card-header p-1 text-center">Products</div>
							<div class="p-2 text-center">
								<?php echo e($productsCount); ?>

							</div>
						</div>
					</div>

					<div class="col">
						<div class="card card-primary">
							<div class="card-header p-1 text-center">Carvings</div>
							<div class="p-2 text-center">
								<?php echo e($carvingsCount); ?>

							</div>
						</div>
					</div>

					<div class="col">
						<div class="card card-primary">
							<div class="card-header p-1 text-center">Items</div>
							<div class="p-2 text-center">
								<?php echo e($otherItemsCount); ?>

							</div>
						</div>
					</div>

					
				</div>

			</div>
		</div>

	</div>
	
	<div class="col-xl-2">
		<?php echo $__env->make('admin.dashboard.infoBoxes.permissions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php echo $__env->make('admin.dashboard.infoBoxes.posts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php echo $__env->make('admin.dashboard.infoBoxes.projects', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php echo $__env->make('admin.dashboard.infoBoxes.recipes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php echo $__env->make('admin.dashboard.infoBoxes.roles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php echo $__env->make('admin.dashboard.infoBoxes.users', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</div>

</div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
	<?php echo $usersPerMonthChart->renderChartJsLibrary(); ?>

	<?php echo $usersPerMonthChart->renderJs(); ?>

	<?php echo $bugsByTypeChart->renderJs(); ?>

	<?php echo $featuresByTypeChart->renderJs(); ?>

	<?php echo $carvingsByCategoryChart->renderJs(); ?>

	<?php echo $recipesByCategoryChart->renderJs(); ?>

	<?php echo $projectsByCategoryChart->renderJs(); ?>

	<?php echo $billablesByItemChart->renderJs(); ?>

	
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/dashboard/index.blade.php ENDPATH**/ ?>