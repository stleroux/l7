

	<?php if($posts->count() > 0): ?>
	
		
	
		<table id="datatable" class="table table-sm table-hover">
			<thead>
				<tr>
					<th class="no-sort" width="30px">
	               <div class="icheck-primary d-inline">
	                  <input type="checkbox" class="checkbox_all" id="checkbox_all" onchange="showHide(this.checked)">
	                  <label for="checkbox_all"></label>
	               </div>
	            </th>
					<th>Title</th>
					<th>Category</th>
					<th>Author</th>
					<th>Views</th>
					<th>Likes</th>
					<th>Favorited</th>
					<th>Created On</th>
					<th>Updated On</th>
					<th>Publish(ed) On</th>
					<th data-orderable="false"></th>
				</tr>
			</thead>
			<tbody>
				<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td>
                  <div class="icheck-primary d-inline">
                     <input
                     	name="entries[]"
                     	id="<?php echo e($post->id); ?>"
                     	type="checkbox"
                     	class="record checkbox_record"
                     	value="<?php echo e($post->id); ?>"
                     	onchange="showHide(this.checked)"
                     />
                     <label for="<?php echo e($post->id); ?>"></label>
                  </div>
               </td>
					<td>
						<a href="<?php echo e(route('admin.posts.show', $post->id)); ?>">
							<?php echo e(ucwords($post->title)); ?>

						</a>
					</td>
					<td><?php echo e(ucwords($post->category->name)); ?></td>
					<td><?php echo $__env->make('common.authorFormat', ['model'=>$post, 'field'=>'user'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></td>
					<td><?php echo e($post->views); ?></td>
					<td><?php echo e($post->likes()->count()); ?></td>
					<td><?php echo e($post->favoritesCount); ?></td>
					<td><?php echo e($post->created_at->format(config('settings.dateFormat'))); ?></td>
					<td>
						
						<?php echo e($post->updated_at->format(config('settings.dateFormat'))); ?>

					</td>
					<td>
						<?php echo e($post->published_at ? $post->published_at->format(config('settings.dateFormat')) : 'N/A'); ?>

						
					</td>
					
					<td class="text-right">
                  <?php echo $__env->make('admin.posts.index.actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               </td>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
	
	<?php else: ?>
	
		<?php echo e(config('settings.noRecordsFound')); ?>

	
	<?php endif; ?>


<?php /**PATH C:\sites\l7\resources\views/admin/posts/index/grid.blade.php ENDPATH**/ ?>