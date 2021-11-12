<div class="card card-trans-4 card-outline card-primary text-dark mb-2">

   <div class="card-header bg-info p-1">
      <div class="card-title">
         <i class="fa fa-comment" aria-hidden="true"></i>
         Leave a comment
      </div>
   </div>

   @auth
      <div class="card-body p-1">
         <form action="{{ route('projects.comment.store', $project->id) }}" method="POST">
            @csrf

            <div class="row">
               <div class="col-md-12">
                  <div class="form-group {{ $errors->has('comment') ? 'has-error' : '' }}">
                     <textarea name="comment" id="comment" rows="5" class="form-control"></textarea>
                     <span class="text-danger">{{ $errors->first('comment') }}</span>
                  </div>
               </div>
            </div>

            <div class="row">
               <div class="col-md-12">
                  <button type="submit" class="btn btn-sm btn-success btn-block">Add Comment</button>
               </div>
            </div>

         </form>
      </div>

      <div class="card-footer p-1">
         Be a sport and keep your comments clean, otherwise they will be removed and you risk being banned from the site.
      </div>

   @else

      <div class="card-body p-1">
         Please login to leave a comment
      </div>
   
   @endauth

</div>
