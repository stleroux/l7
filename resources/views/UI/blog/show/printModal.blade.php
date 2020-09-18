<div class="modal fade" id="printModal" tabindex="-1" role="dialog" aria-labelledby="printModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="printModalLabel">Print blog</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span>&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>To print this post, please use your browser's print functionality.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Cancel</button>
				<a href="{{ route('blog.print', $post->id) }}" class="btn btn-sm btn-primary">
					<div class="text text-left">
						<i class="fa fa-print"></i> Proceed
					</div>
				</a>
			</div>
		</div>
	</div>
</div>
