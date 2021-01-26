
<div class="tab-pane fade" id="post-image" role="tabpanel" aria-labelledby="post-image-tab">

	<div class="col-xs-6 col-sm-2">

      <table width="100%">
         <tr>
            <th>Current Image</th>
         </tr>
         <tr>
            <td>
               <?php if($post->image): ?>
                  <img src="/_posts/<?php echo e($post->image); ?>" height="125" width="125" alt="">
               <?php else: ?>
                  <i class="fa fa-5x fa-ban" aria-hidden="true"></i>
               <?php endif; ?>
            </td>
         </tr>
      </table>

   </div>

   <div class="col-xs-6 col-sm-4">
      <?php echo $__env->make('admin.posts.form.fields.image', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   </div>
   
</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/posts/edit/image.blade.php ENDPATH**/ ?>