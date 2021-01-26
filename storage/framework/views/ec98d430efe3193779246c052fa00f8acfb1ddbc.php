
<div class="tab-pane fade" id="recipe-image" role="tabpanel" aria-labelledby="recipe-image-tab">

	<div class="col-xs-6 col-sm-2">

      <table width="100%">
         <tr>
            <th>Current Image</th>
         </tr>
         <tr>
            <td>
               <?php if($recipe->image): ?>
                  <img src="/_recipes/<?php echo e($recipe->image); ?>" height="125" width="125" alt="">
               <?php else: ?>
                  <i class="fa fa-5x fa-ban" aria-hidden="true"></i>
               <?php endif; ?>
            </td>
         </tr>
      </table>

   </div>

   <div class="col-xs-6 col-sm-4">
      <?php echo $__env->make('admin.recipes.form.fields.image', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   </div>
   
</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/recipes/edit/tabs/image.blade.php ENDPATH**/ ?>