<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

	<div class="modal-dialog" role="document">

		<div class="modal-content">

			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Create New Client</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			
			<form action="<?php echo e(route('admin.invoicer.clients.store')); ?>" class="needs-validation" novalidate method="POST">
				<?php echo csrf_field(); ?>
			
				<div class="modal-body">

					<input type="hidden" name="popup" value="popup">
					
					<div class="form-group <?php echo e($errors->has('contact_name') ? 'has-error' : ''); ?>">
						<label for="contact_name" class="required">Contact Name</label>
						<input type="text" name="contact_name" class="form-control" value="<?php echo e(old('contact_name')); ?>">
						<span class="text-danger"><?php echo e($errors->first('contact_name')); ?></span>
					</div>

					<div class="form-group">
						<label for="company_name">Company Name</label>
						<input type="text" name="company_name" class="form-control" value="<?php echo e(old('company_name')); ?>">
						<span class="text-danger"><?php echo e($errors->first('company_name')); ?></span>
					</div>

					<div class="form-group">
						<label for="email">Email Address</label>
						<input type="text" name="email" class="form-control" value="<?php echo e(old('email')); ?>">
						<span class="text-danger"><?php echo e($errors->first('email')); ?></span>
					</div>

					<div class="form-group">
						<label for="telephone">Telephone</label>
						<input type="text" name="telephone" class="form-control" value="<?php echo e(old('telephone')); ?>" data-inputmask="'mask': '(999) 999-9999'">
						<span class="text-danger"><?php echo e($errors->first('telephone')); ?></span>
					</div>

				</div>
				
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Submit</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>

			</form>

		</div>

	</div>

</div>

<?php $__env->startSection('scripts'); ?>


<script type="text/javascript">
<?php if(count($errors) > 0): ?>
		$('#exampleModal').modal('show');
<?php endif; ?>
</script>
<?php $__env->stopSection(); ?><?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/invoicer/clients/createModal.blade.php ENDPATH**/ ?>