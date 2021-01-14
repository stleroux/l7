<?php echo $__env->make('admin.settings.index.sections.stylesheet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.settings.index.sections.pageHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.settings.index.sections.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.settings.index.sections.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.settings.index.sections.functions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.settings.index.sections.formBegin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.settings.index.sections.formEnd', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>


	<div class="card-deck mb-3">
		
		<div class="card">
			<div class="card-body p-2">
				<?php echo $__env->make('admin.settings.fields.appName', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			</div>
		</div>

		<div class="card">
			<div class="card-body p-2">
				<?php echo $__env->make('admin.settings.fields.appURL', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			</div>
		</div>

		<div class="card">
			<div class="card-body p-2">
				<?php echo $__env->make('admin.settings.fields.noRecordsFound', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			</div>
		</div>		

	</div>

	<div class="card-deck mb-3">

		<div class="card">
			<div class="card-body p-2">
				<?php echo $__env->make('admin.settings.fields.dateFormat', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			</div>
		</div>

		<div class="card">
			<div class="card-body p-2">
				<?php echo $__env->make('admin.settings.fields.authorFormat', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			</div>
		</div>


		<div class="card">
			<div class="card-body p-2">
				<?php echo $__env->make('admin.settings.fields.siteVersionNo', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			</div>
		</div>

		<div class="card">
			<div class="card-body p-2">
				<?php echo $__env->make('admin.settings.fields.invoicerVersionNo', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			</div>
		</div>

	</div>

	<div class="card-deck mb-3">

		<div class="card">
			<div class="card-body p-2">
				<?php echo $__env->make('admin.settings.fields.homepageBlogCount', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			</div>
		</div>

		<div class="card">
			<div class="card-body p-2">
				<?php echo $__env->make('admin.settings.fields.popularCount', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			</div>
		</div>

		<div class="card">
			<div class="card-body p-2">
				<?php echo $__env->make('admin.settings.fields.loginCountWarning', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			</div>
		</div>

		<div class="card">
			<div class="card-body p-2">
				<?php echo $__env->make('admin.settings.fields.perPage', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			</div>
		</div>

	</div>

	<div class="card-deck mb-3">

		<div class="card">
			<div class="card-body p-2">
				<?php echo $__env->make('admin.settings.fields.modules', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			</div>
		</div>

	</div>

   <?php echo $__env->make('admin.settings.help', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.admin-10-2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/settings/index.blade.php ENDPATH**/ ?>