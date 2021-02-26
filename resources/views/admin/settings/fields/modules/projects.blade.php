<tr class="row">

   <th class="col-sm-3">
   	Projects
   </th>

   <td class="col-sm-9">
      <select name="projects">
         <option value="visible" {{ config('settings.projects') == 'visible' ? 'selected' : '' }}>Visible</option>
         <option value="hidden" {{ config('settings.projects') == 'hidden' ? 'selected' : '' }}>Hidden</option>
      </select>
   </td>
   
</tr>
