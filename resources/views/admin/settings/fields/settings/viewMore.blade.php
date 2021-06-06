<!-- GENERIC FORM SUMISSION ERROR -->

<tr class="row">
   
   <td class="col-5 col-sm-3">
      View More
   </td>

   <td class="col-7 col-sm-3">
      <textarea name="viewMore" id="viewMore" cols="40" rows="3" class="form-control form-control-sm @error('viewMore') is-invalid @enderror" placeholder="viewMore" data-inputmask="">{{ old('viewMore') ?? Config::get('settings.viewMore') }}</textarea>
   </td>

   <td class="col-sm-6 d-none d-md-table-cell">
      Message to display when user is not logged in and they view a details page.
   </td>

</tr>