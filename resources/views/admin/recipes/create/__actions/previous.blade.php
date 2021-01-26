@if(app('router')->getRoutes()->match(app('request')->create(url()->previous()))->getName() == "admin.recipes.show")
   <a href="{{ url()->previous() }}" class="btn btn-block btn-default" title="Back">
      <i class="{{ config('icons.back') }}"></i>
      <div class="d-none d-lg-inline">
         Back
      </div>
   </a>
@endif
