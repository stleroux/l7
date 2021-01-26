<?php if($paginator->hasPages()): ?>
	<nav class="bg-info float-right m-0 p-0">
		<ul class="pagination p-0 m-0">

			
			<?php if($paginator->onFirstPage()): ?>
				<li class="page-item disabled">
					<span class="page-link">First</span>
				</li>
			<?php else: ?>
				<li class="page-item">
					<a href="<?php echo e($paginator->toArray()['first_page_url']); ?>">
						<span class="page-link">First</span>
					</a>
				</li>
			<?php endif; ?>

			
			<?php if($paginator->onFirstPage()): ?>
				<li class="page-item disabled">
					<span class="page-link"><?php echo app('translator')->get('pagination.previous'); ?></span>
				</li>
			<?php else: ?>
				<li class="page-item">
					<a class="page-link" href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev"><?php echo app('translator')->get('pagination.previous'); ?></a>
				</li>
			<?php endif; ?>

			
			<select class="form-control page-link col-xl-2" onchange="location = this.options[this.selectedIndex].value;">
				<?php for($i = 1; $i <= $paginator->lastPage(); $i++): ?>
					<option value="?page=<?php echo e($i); ?>" <?php echo e(($paginator->currentPage() == $i) ? 'selected' : ''); ?> class="text-dark"><?php echo e($i); ?></option>
				<?php endfor; ?>
			</select>

			
			<?php if($paginator->hasMorePages()): ?>
				<li class="page-item">
					<a class="page-link" href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next"><?php echo app('translator')->get('pagination.next'); ?></a>
				</li>
			<?php else: ?>
				<li class="page-item disabled" aria-disabled="true">
					<span class="page-link"><?php echo app('translator')->get('pagination.next'); ?></span>
				</li>
			<?php endif; ?>

			
			<?php if($paginator->lastPage() == $paginator->currentPage()): ?>
				<li class="page-item disabled">
					<span class="page-link">Last</span>
				</li>
			<?php else: ?>
				<li class="page-item">
					<a href="<?php echo e($paginator->toArray()['last_page_url']); ?>">
						<span class="page-link">Last</span>
					</a>
				</li>
			<?php endif; ?>
		</ul>
	</nav>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/UI/darts/pagination/simple.blade.php ENDPATH**/ ?>