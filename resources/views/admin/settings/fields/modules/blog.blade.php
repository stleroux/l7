<tr class="row">

   <th class="col-sm-3">
   	Blog
   </th>
   
   <td class="col-sm-9">
      <select name="blog">
         <option value="visible" {{ config('settings.blog') == 'visible' ? 'selected' : '' }}>Visible</option>
         <option value="hidden" {{ config('settings.blog') == 'hidden' ? 'selected' : '' }}>Hidden</option>
      </select>
   </td>
   
</tr>
