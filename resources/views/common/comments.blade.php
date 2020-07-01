<div class="card mb-3">
   
   <div class="card-header">
      <div class="card-title">
         <i class="fa fa-comments-o"></i>
         Comments <small>({{ $model->comments()->count() }} total)</small>
      </div>
   </div>

   <div class="card-body p-0">
      @if($model->comments->count())
         <table class="table table-sm table-hover mb-0">
            <thead>
               <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Comment</th>
                  <th scope="col">Posted On</th>
               </tr>
            </thead>
            <tbody>
               @foreach($model->comments as $comment)
                  <tr scope="row">
                     <td>@include('common.authorFormat', ['model'=>$comment, 'field'=>'user'])</td>
                     {{-- <td>{{ $comment->user->name }}</td> --}}
                     <td>{!! $comment->comment !!}</td>
                     <td>@include('common.dateFormat', ['model'=>$comment, 'field'=>'created_at'])</td>
                     <td></td>
                  </tr>
               @endforeach
            </tbody>
         </table>
      @else
         <div class="text text-light p-1">No comments found</div>
      @endif
   </div>
   
</div>
