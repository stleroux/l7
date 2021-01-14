<!-- HOMEPAGE BLOG COUNT -->

<div class="form-group">

   <label for="homepageBlogCount" class="{{ $required ?? '' }}">
      {{ $label ?? 'Homepage Blog Count' }}
   </label>
   
   <input
      type="number"
      name="homepageBlogCount"
      id="homepageBlogCount"
      class="form-control @error('homepageBlogCount') is-invalid @enderror"
      value="{{ old('homepageBlogCount') ?? Config::get('settings.homepageBlogCount') }}"
      placeholder="homepageBlogCount"
      data-inputmask=""
   />
   <small>The number of blog entries to show on the Homepage</small>
   
   @error('homepageBlogCount')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>