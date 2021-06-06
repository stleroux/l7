<!-- GENERIC FORM SUMISSION ERROR -->

<tr class="row">
   
   <td class="col-5 col-sm-3">
      Generic Form Submission Error
   </td>

   <td class="col-7 col-sm-3">
      <input
         type="text"
         name="formSubmissionError"
         id="formSubmissionError"
         class="form-control form-control-sm @error('formSubmissionError') is-invalid @enderror"
         value="{{ old('formSubmissionError') ?? Config::get('settings.formSubmissionError') }}"
         placeholder="formSubmissionError"
         data-inputmask=""
      />
   </td>

   <td class="col-sm-6 d-none d-md-table-cell">
      Generic message to display at top of form when validation error(s) occur.
   </td>

</tr>