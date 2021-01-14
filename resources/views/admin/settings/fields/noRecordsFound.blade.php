<!-- NO RECORDS FOUND -->

<div class="form-group">

   <label for="noRecordsFound" class="{{ $required ?? '' }}">
      {{ $label ?? 'No Records Found Message' }}
   </label>
   
   <input
      type="text"
      name="noRecordsFound"
      id="noRecordsFound"
      class="form-control @error('noRecordsFound') is-invalid @enderror"
      value="{{ old('noRecordsFound') ?? Config::get('settings.noRecordsFound') }}"
      placeholder="noRecordsFound"
      data-inputmask=""
   />
   <small>Message to display when no records are found in the database</small>
   
   @error('noRecordsFound')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>