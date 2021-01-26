{{--  PREVIOUS --}}

@if(app('router')->getRoutes()->match(app('request')->create(url()->previous()))->getName() == "admin.recipes.show")
   <a href="{{ url()->previous() }}" class="btn btn-block btn-default" title="Previous">
      <i class="{{ config('icons.previous') }}"></i>
      <div class="d-none d-lg-inline">
         Previous
      </div>
   </a>
@endif
