<div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="imageModalLabel">
					{{ $post->title }}
				</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span>&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>
					{{-- {{ Html::image('_posts/'. $post->image, "", array('height'=>'100%','width'=>'100%')) }} --}}
					<img src="/_posts/{{ $post->image }}" alt="" height="100%" width="100%">
				</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
