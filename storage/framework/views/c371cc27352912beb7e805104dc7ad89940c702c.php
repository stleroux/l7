<tr class="row">

   <th class="col-sm-3">
   	Carvings
   </th>

   <td class="col-sm-9">
      <select name="carvings">
         <option value="visible" <?php echo e(config('settings.carvings') == 'visible' ? 'selected' : ''); ?>>Visible</option>
         <option value="hidden" <?php echo e(config('settings.carvings') == 'hidden' ? 'selected' : ''); ?>>Hidden</option>
      </select>
   </td>
   
</tr>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/settings/fields/modules/carvings.blade.php ENDPATH**/ ?>