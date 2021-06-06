

<?php $__env->startSection('stylesheet'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader', 'DASHBOARD'); ?>

<?php $__env->startSection('breadcrumb'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container-fluid m-0 p-0">

	<?php echo $__env->make('admin.dashboard.invoicerStats', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<div class="row mb-0">
		<div class="col-xl-9">
			<div class="card">
				<div class="card-body mb-0 pb-0">
					<div class="row row-cols-1 row-col-xl-2">
						<?php echo $__env->make('admin.dashboard.topBoxes.bugs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>							
						<?php echo $__env->make('admin.dashboard.topBoxes.audits', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo $__env->make('admin.dashboard.topBoxes.features', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-body">
					<div class="row row-cols-1 row-col-xl-2">
						<?php echo $__env->make('admin.dashboard.charts.billablesByItem', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo $__env->make('admin.dashboard.charts.carvingsByCategory', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo $__env->make('admin.dashboard.charts.recipesByCategory', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo $__env->make('admin.dashboard.charts.projectsByCategory', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo $__env->make('admin.dashboard.charts.bugsByType', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo $__env->make('admin.dashboard.charts.featuresByType', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo $__env->make('admin.dashboard.charts.usersPerMonth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xl-3">
			<div class="row row-cols-1 row-col-md-2 row-col-xl-1">
				<?php echo $__env->make('admin.dashboard.infoBoxes.permissions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				<?php echo $__env->make('admin.dashboard.infoBoxes.posts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				<?php echo $__env->make('admin.dashboard.infoBoxes.projects', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				<?php echo $__env->make('admin.dashboard.infoBoxes.recipes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				<?php echo $__env->make('admin.dashboard.infoBoxes.roles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				<?php echo $__env->make('admin.dashboard.infoBoxes.users', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			</div>
		</div>
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

<?php echo $__env->make('layouts.admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/admin/dashboard/index.blade.php ENDPATH**/ ?>