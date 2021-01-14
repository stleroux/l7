<div class="card mb-2">
	<div class="card-header">
      <div class="card-title">
		   <i class="far fa-image"></i>
		   Project Image(s)
      </div>
	</div>

	<div class="card-body p-0 m-0 w-75 mx-auto">
		@if($carving->images->count() >= 1)
			<div id="carvingsImageSlider" class="carousel slide mb-0" data-ride="carousel">

				<ol class="carousel-indicators">
					@foreach($carving->images as $image)
						<li data-target="#carvingsImageSlider" data-slide-to="{{ $image->id }}" class="{{ ($loop->first) ? 'active' : '' }}"></li>
					@endforeach
				</ol>

				<div class="carousel-inner">
					@foreach($carving->images as $image)
					<div class="carousel-item {{ ($loop->first) ? 'active' : '' }} text-center p-2">
						
	               @if(auth::check())
							<a href="" data-toggle="modal" data-target="#imageModal{{ $image->id }}_XL" class="">
		                  <img class="w-100" src="/_carvings/{{ $carving->id }}/thumbs/{{ $image->name }}" alt="{{ $image->name }}">
	   	            </a>
{{-- 	      	         <a href="/_carvings/{{ $carving->id }}/full_size/{{ $image->name }}" target="_blank">
	         	         View Full Size
	            	   </a> --}}
	               @else
	                  <img class="w-100" src="/_carvings/{{ $carving->id }}/thumbs/{{ $image->name }}" alt="{{ $image->name }}">
	               @endauth

						<div class="modal bg-secondary" id="imageModal{{ $image->id }}_XL" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel">
							<div class="modal-dialog  modal-dialog-full" role="document">
								<div class="modal-content modal-content-full">
									<div class="modal-header bg-primary">
										<h4 class="modal-title" id="imageModalLabel">{{ $image->name }}</h4>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span>&times;</span>
										</button>
									</div>
									<div class="modal-body text-dark">
										<p>
											<img src="{{ "/_carvings/" . $carving->id . "/" . $image->name }}" height="100%" width="100%" alt="">
										</p>
										<p>{{ $image->description }}</p>
								 	</div>
								 	<div class="modal-footer">
										<button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>

				@if($carving->images->count() > 1)
					<a class="carousel-control-prev" href="#carvingsImageSlider" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>

					<a class="carousel-control-next" href="#carvingsImageSlider" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				@endif
			</div>
		@else
			<img src="/images/no_image.jpg" alt="No Image" height="100%" width="100%">
		@endif
	</div>
</div>
