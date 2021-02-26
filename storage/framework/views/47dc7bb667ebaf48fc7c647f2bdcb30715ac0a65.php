<tr class="row">

   <th class="col-sm-3">
   	Recipes
   </th>
   
   <td class="col-sm-9">
      <select name="recipes">
         <option value="visible" <?php echo e(config('settings.recipes') == 'visible' ? 'selected' : ''); ?>>Visible</option>
         <option value="hidden" <?php echo e(config('settings.recipes') == 'hidden' ? 'selected' : ''); ?>>Hidden</option>
      </select>
   </td>
   
</tr>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/settings/fields/modules/recipes.blade.php ENDPATH**/ ?>