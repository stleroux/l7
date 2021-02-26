<tr class="row">

   <th class="col-sm-3">
   	Darts
   </th>

   <td class="col-sm-9">
      <select name="darts">
         <option value="visible" <?php echo e(config('settings.darts') == 'visible' ? 'selected' : ''); ?>>Visible</option>
         <option value="hidden" <?php echo e(config('settings.darts') == 'hidden' ? 'selected' : ''); ?>>Hidden</option>
      </select>
   </td>
   
</tr>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/settings/fields/modules/darts.blade.php ENDPATH**/ ?>