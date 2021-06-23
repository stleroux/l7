@auth
   @if(
      \Config::get('settings.carvings') == 'visible' ||
      \Config::get('settings.blog') == 'visible' ||
      \Config::get('settings.projects') == 'visible' ||
      \Config::get('settings.recipes') == 'visible'
      )
   <form action="{{ route('UI.search') }}" method="POST" class="form-inline ml-3">
      @csrf

      <div class="input-group border">
      
         <input type="text" name="query" class="form-control form-control-navbar" placeholder="Site Search" aria-label="Search">
         
         <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
               <i class="fas fa-search"></i>
            </button>
         </div>

      </div>

   </form>

   @endif
@endauth
