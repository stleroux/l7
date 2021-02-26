<tr class="row">

   <th class="col-sm-3">
   	Carvings
   </th>

   <td class="col-sm-9">
      <select name="carvings">
         <option value="visible" {{ config('settings.carvings') == 'visible' ? 'selected' : '' }}>Visible</option>
         <option value="hidden" {{ config('settings.carvings') == 'hidden' ? 'selected' : '' }}>Hidden</option>
      </select>
   </td>
   
</tr>
