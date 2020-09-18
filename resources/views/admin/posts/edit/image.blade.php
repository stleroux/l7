{{-- IMAGE --}}
<div class="tab-pane fade" id="post-image" role="tabpanel" aria-labelledby="post-image-tab">

	<div class="col-xs-6 col-sm-2">

      <table width="100%">
         <tr>
            <th>Current Image</th>
         </tr>
         <tr>
            <td>
               @if ($post->image)
                  <img src="/_posts/{{ $post->image }}" height="125" width="125" alt="">
               @else
                  <i class="fa fa-5x fa-ban" aria-hidden="true"></i>
               @endif
            </td>
         </tr>
      </table>

   </div>

   <div class="col-xs-6 col-sm-4">
      @include('admin.posts.form.fields.image')
   </div>
   
</div>
