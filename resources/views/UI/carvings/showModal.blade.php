<div class="modal fade" id="showModal{{ $project->id }}" tabindex="-1" role="dialog" aria-labelledby="showModal">
    <div class="modal-dialog modal-xl">
	    <div class="modal-content">
	    	<!-- Modal Header -->
	      <div class="modal-header">
	        <h4 class="modal-title text-dark">
	        	   <i class="{{ config('icons.carvings') }}"></i>&nbsp;
   				{{ ucwords($carving->name) }} Carving Information
	        </h4>
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	      </div>

	       <!-- Modal body -->
      	<div class="modal-body">
		    	@include('UI.carvings.show')
		    </div>

	    	<!-- Modal footer -->
	      <div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	      </div>
	    </div>
    </div>
</div>
