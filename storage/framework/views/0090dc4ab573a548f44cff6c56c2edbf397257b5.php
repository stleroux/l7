<tr class="row">

   <th class="col-sm-3">
   	Blog
   </th>
   
   <td class="col-sm-9">
      <select name="blog">
         <option value="visible" <?php echo e(config('settings.blog') == 'visible' ? 'selected' : ''); ?>>Visible</option>
         <option value="hidden" <?php echo e(config('settings.blog') == 'hidden' ? 'selected' : ''); ?>>Hidden</option>
      </select>
   </td>
   
</tr>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/settings/fields/modules/blog.blade.php ENDPATH**/ ?>