<div class="card mb-2 card-trans-4">

   <div class="card-header card_header text-light p-2 font-weight-normal">
      <div class="card-title">
         <i class="fa fa-comment" aria-hidden="true"></i>
         Leave a comment
      </div>
   </div>

   @auth
      <div class="card-body card-trans-2 p-2 m-0">
         <form action="{{ route('blog.storeComment', $post->id) }}" method="POST">
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

      <div class="card-body card-trans-2 p-2 m-0">
         Please login to leave a comment
      </div>
   
   </div>

@endauth
