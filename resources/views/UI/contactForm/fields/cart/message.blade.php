<div class="form-group">
   <label for="message" class="required">Message</label>
   <textarea
      id="message"
      name="message"
      class="form-control form-control-sm @error('message') is-invalid @enderror"
      placeholder="Type your message here"
      rows="5">{{ old('message') }}</textarea>
   @error('message')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror
</div>
