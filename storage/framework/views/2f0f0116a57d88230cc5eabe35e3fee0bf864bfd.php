

<?php echo $__env->make('admin.settings.index.sections.stylesheet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.settings.index.sections.pageHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.settings.index.sections.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.settings.index.sections.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.settings.index.sections.blocks', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.settings.index.sections.formBegin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.settings.index.sections.formEnd', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>

	<ul class="nav nav-tabs" id="myTab" role="tablist">
		<li class="nav-item">
			<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="modules-tab" data-toggle="tab" href="#modules" role="tab" aria-controls="modules" aria-selected="false">Modules</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="invoicer-tab" data-toggle="tab" href="#invoicer" role="tab" aria-controls="invoicer" aria-selected="false">Invoicer</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Settings</a>
		</li>
	</ul>

	<div class="tab-content" id="myTabContent">
		<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
			<?php echo $__env->make('admin.settings.inc.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</div>
		<div class="tab-pane fade" id="modules" role="tabpanel" aria-labelledby="modules-tab">
			<?php echo $__env->make('admin.settings.inc.modules', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</div>
		<div class="tab-pane fade" id="invoicer" role="tabpanel" aria-labelledby="invoicer-tab">
			<?php echo $__env->make('admin.settings.inc.invoicer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</div>
		<div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
			<?php echo $__env->make('admin.settings.inc.settings', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</div>
	</div>



















   <?php echo $__env->make('admin.settings.help', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.admin-10-2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/admin/settings/index.blade.php ENDPATH**/ ?>