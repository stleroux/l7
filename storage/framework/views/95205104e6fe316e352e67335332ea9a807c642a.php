

<?php $__env->startSection('stylesheet'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.invoicer-products')); ?>"></i>
   Invoicer :: Products
   <?php if(strpos($_SERVER['REQUEST_URI'], 'search?') !== false): ?>
		[Filtered]
	<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
   <li class="breadcrumb-item"><a href="<?php echo e(route('admin.invoicer')); ?>">Invoicer</a></li>
   <li class="breadcrumb-item">Products</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightSidebar'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

	<?php echo $__env->make('admin.invoicer.products.index.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<div class="row">
		<div class="col-sm-9">
				<div class="card">
					
					
						<?php if($products->count() > 0): ?>
							<table class="table table-hover table-sm">
								<thead>
									<tr>
										
										<th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('code','Code'));?></th>
										<th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('details','Details'));?></th>
										<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('invoicer-product')): ?>
											<th></th>
										<?php endif; ?>
									</tr>
								</thead>
								<tbody>
									<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<tr>
											<td><?php echo e($product->code); ?></td>
											<td><?php echo e($product->details); ?></td>
											<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('invoicer-product')): ?>
												<td>
													<form action="<?php echo e(route('admin.invoicer.products.destroy', [$product->id])); ?>" method="POST" onsubmit="return confirm('Do you really want to delete this product?');" class="float-right">
														<?php echo csrf_field(); ?>

														<a href="<?php echo e(route('admin.invoicer.products.show', $product->id)); ?>"
															class="btn btn-sm btn-outline-primary"
															data-toggle="tooltip"
															title="View Product">
															<i class="fa fa-eye"></i>
															
														</a>

														<a href="<?php echo e(route('admin.invoicer.products.edit', $product->id)); ?>"
															class="btn btn-sm btn-primary"
															data-toggle="tooltip"
															title="Edit Product">
															<i class="fa fa-edit"></i>
															
														</a>

														<input type="hidden" name="_method" value="DELETE" />

														<button type="submit"
															class="btn btn-sm btn-danger"
															data-toggle="tooltip"
															title="Delete Product Permanently">
															<i class="fa fa-trash-alt"></i>
															
														</button>
													</form>
												</td>
											<?php endif; ?>
										</tr>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</tbody>
							</table>
						<?php else: ?>
							<div class="card-body">
								No products found in the system.
							</div>
						<?php endif; ?>
					

					<?php if($products->count() > 0): ?>
						<div class="card-footer">
							<div class="row">
								<div class="col-sm-6 text-left">
									Showing records <?php echo e($products->firstItem()); ?> to <?php echo e($products->lastItem()); ?> of <?php echo e($products->total()); ?>

								</div>
								<div class="col-sm-6 text-right">
									<?php echo $products->appends(request()->except('page'))->render(); ?>

								</div>
							</div>
						</div>
					<?php endif; ?>
				</div>
		</div>

		<div class="col-sm-3">
			<div class="card">
				<div class="card-header">
					Filter
				</div>
				<div class="card-body pb-0">
					<form action="<?php echo e(route('admin.invoicer.products.search')); ?>" class="">
						<div class="form-group">
							<select class="form-control" name="selection">
								<option value="code">Code</option>
								<option value="details">Details</option>
							</select>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="searchWord">
						</div>
						<div class="form-group text-center">
							<button type="submit" value="Search" class="btn btn-sm btn-primary">
								<i class="fa fa-binoculars"></i>
								Filter
							</button>
							<a href="<?php echo e(route('admin.invoicer.products')); ?>" class="btn btn-sm btn-outline-secondary">
								<i class="far fa-square"></i>
								Reset
							</a>
						</div>
					</form>
				</div>
				<div class="card-footer">
					Click the Reset button to clear search parameters and display all products
				</div>
			</div>
		</div>

	</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/admin/invoicer/products/index/index.blade.php ENDPATH**/ ?>