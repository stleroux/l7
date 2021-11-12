<!-- CREATED DATE -->

<div class="col-sm-3">

	<div class="form-group <?php echo e($errors->has('created_at') ? 'has-error' : ''); ?>">

		<label for="created_at">Created Date</label>

		<div class="input-group">

			<input
				type="text"
				name="created_at"
				value="<?php echo e($invoice->created_at); ?>"
				class="form-control"
				<?php echo e($readOnly ? 'readonly' : ''); ?> />
			

			<div class="input-group-append">
				<span class="input-group-text">
					<i class="far fa-calendar-alt"></i>
				</span>
			</div>

			<span class="text-danger"><?php echo e($errors->first('created_at')); ?></span>

		</div>

		

	</div>

</div>
<?php /**PATH C:\sites\l7\resources\views/admin/invoicer/invoices/edit/fields/dates/created.blade.php ENDPATH**/ ?>