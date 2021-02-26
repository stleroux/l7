<tr class="row">

   <th class="col-sm-3">
   	Darts
   </th>

   <td class="col-sm-9">
      <select name="darts">
         <option value="visible" {{ config('settings.darts') == 'visible' ? 'selected' : '' }}>Visible</option>
         <option value="hidden" {{ config('settings.darts') == 'hidden' ? 'selected' : '' }}>Hidden</option>
      </select>
   </td>
   
</tr>
