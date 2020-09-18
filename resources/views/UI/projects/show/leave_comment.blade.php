{{-- @if(checkPerm('comment_add')) --}}

   <form action="{{ route('projects.comment.store', $project->id) }}" method="POST">
      @csrf

      <div class="card card-trans-2 card-outline card-primary mb-2">

         <div class="card-header bg-info font-weight-bold">
            <i class="{{ Config::get('icons.comment') }}"></i>
            Leave a comment
         </div>
         
         <div class="card-body p-2">
            
            <div class="form-group">
               
               <textarea name="comment" id="" rows="2" class="form-control form-control-sm @error('comment') is-invalid @enderror">{{ old('comment') ?? $project->comment }}</textarea>
               
               @error('comment')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
               @enderror

            </div>

            <button type="submit" class="btn btn-sm btn-success">
               <i class="{{ Config::get('icons.add') }}"></i>
               Add Comment
            </button>

         </div>

         <div class="card-footer text-dark p-1">
            <small>Be a sport and keep your comments clean, otherwise they will be removed and you risk being banned from the site.</small>
         </div>
      </div>

   </form>
