

	<?php if($recipes->count() > 0): ?>
	
		
	
		<table id="datatable" class="table table-sm table-hover">
			<thead>
				<tr>
					<th class="no-sort" width="30px">
	               <div class="icheck-primary d-inline">
	                  <input type="checkbox" class="checkbox_all" id="checkbox_all" onchange="showHide(this.checked)">
	                  <label for="checkbox_all"></label>
	               </div>
	            </th>
					<th>Name</th>
					<th>Category</th>
					<th>Views</th>
					<th>Favorited</th>
					<th>Author</th>
					<th>Created On</th>
					<th>Publish(ed) On</th>
					<th data-orderable="false"></th>
				</tr>
			</thead>
			<tbody>
				<?php $__currentLoopData = $recipes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recipe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td>
                  <div class="icheck-primary d-inline">
                     <input
                     	name="entries[]"
                     	id="<?php echo e($recipe->id); ?>"
                     	type="checkbox"
                     	class="record checkbox_record"
                     	value="<?php echo e($recipe->id); ?>"
                     	onchange="showHide(this.checked)"
                     />
                     <label for="<?php echo e($recipe->id); ?>"></label>
                  </div>
               </td>
					<td>
						<a href="<?php echo e(route('admin.recipes.show', $recipe->id)); ?>">
							<?php echo e(ucwords($recipe->title)); ?>

						</a>
					</td>
					<td>
						<?php echo e(ucwords($recipe->category->name)); ?>

					</td>
					<td>
						<?php echo e($recipe->views); ?>

					</td>
					<td>
						<?php echo e($recipe->favoritesCount); ?>

					</td>
					<td>
						<?php echo $__env->make('common.authorFormat', ['model'=>$recipe, 'field'=>'user'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					</td>
					<td>
						<?php echo e($recipe->created_at->format(config('settings.dateFormat'))); ?>

						
					</td>
					<td>
						<?php echo e($recipe->published_at ? $recipe->published_at->format(config('settings.dateFormat')) : 'N/A'); ?>

						
					</td>
					
					<td class="text-right">
                  <?php echo $__env->make('admin.recipes.index.actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               </td>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
	
	<?php else: ?>
	
		<?php echo e(config('settings.noRecordsFound')); ?>

	
	<?php endif; ?>


<?php /**PATH C:\sites\l7\resources\views/admin/recipes/index/grid.blade.php ENDPATH**/ ?>