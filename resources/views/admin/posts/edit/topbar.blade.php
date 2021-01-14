<div class="row-col mb-2">

   <button type="submit" class="btn btn-sm btn-success" name="submit" value="update" title="Update and Close">
      <i class="{{ config('icons.update') }}"></i>
      <div class="d-none d-lg-inline">
         Update and Close
      </div>
   </button>
   
   <button type="submit" class="btn btn-sm btn-info" name="submit" value="continue" title="Update and Continue">
      <i class="{{ config('icons.update_continue') }}"></i>
      <div class="d-none d-lg-inline">
         Update and Continue
      </div>
   </button>

   <button type="reset" class="btn btn-sm btn-light border" title="Reset Form">
      <i class="{{ config('icons.reset') }}"></i>
      <div class="d-none d-lg-inline">
         Reset Form
      </div>
   </button>

   <a href="{{ route('admin.posts.index') }}" class="btn btn-sm btn-light border" title="Posts">
      <i class="{{ config('icons.posts') }}"></i>
      <div class="d-none d-lg-inline">
         Posts
      </div>
   </a>

   @if(app('router')->getRoutes()->match(app('request')->create(url()->previous()))->getName() == "admin.posts.show")
      <a href="{{ url()->previous() }}" class="btn btn-sm btn-default" title="Back">
         <i class="{{ config('icons.back') }}"></i>
         <div class="d-none d-lg-inline">
            Back
         </div>
      </a>
   @endif

   <div class="float-right">
      <a href="#" class="btn btn-sm btn-light border" data-toggle="modal" data-target="#helpModal" title="Help">
         <i class="{{ config('icons.help') }}"></i>
         <div class="d-none d-lg-inline">
            Help
         </div>
      </a>
   </div>

</div>