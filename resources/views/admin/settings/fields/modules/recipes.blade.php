<tr class="row">

   <th class="col-sm-3">
   	Recipes
   </th>
   
   <td class="col-sm-9">
      <select name="recipes">
         <option value="visible" {{ config('settings.recipes') == 'visible' ? 'selected' : '' }}>Visible</option>
         <option value="hidden" {{ config('settings.recipes') == 'hidden' ? 'selected' : '' }}>Hidden</option>
      </select>
   </td>
   
</tr>
