<tr class="row">

   <th class="col-sm-3">
   	Projects
   </th>

   <td class="col-sm-9">
      <select name="projects">
         <option value="visible" <?php echo e(config('settings.projects') == 'visible' ? 'selected' : ''); ?>>Visible</option>
         <option value="hidden" <?php echo e(config('settings.projects') == 'hidden' ? 'selected' : ''); ?>>Hidden</option>
      </select>
   </td>
   
</tr>
<?php /**PATH C:\sites\l7\resources\views/admin/settings/fields/modules/projects.blade.php ENDPATH**/ ?>