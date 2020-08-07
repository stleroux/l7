{{-- @if(checkPerm('comment_add')) --}}

   {{-- {!! Form::model($project, ['route'=>['projects.comment.store', $project->id]]) !!} --}}
   <form action="{{ route('projects.comment.store', $project->id) }}" method="POST">
      @csrf

      <div class="card card-trans-2 card-outline card-primary mb-2">

         <div class="card-header bg-info">
            <i class="{{ Config::get('icons.comment') }}"></i>
            Leave a comment
         </div>
         
         <div class="card-body p-3">
            <textarea name="comment" rows="1" class="form-control mb-2"></textarea>
            <button type="submit" class="btn btn-sm btn-success">
               <i class="{{ Config::get('icons.add') }}"></i>
               Add Comment
            </button>               
         </div>

         <div class="card-footer text-dark p-1">
            <small>Be a sport and keep your comments clean, otherwise they will be removed and you risk being banned from the site.</small>
         </div>
      </div>

   {{-- {!! Form::close() !!} --}}
   </form>

{{-- @endif --}}
