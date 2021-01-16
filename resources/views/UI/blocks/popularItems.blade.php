@if(
      (Config::get('settings.carvings') == 'visible') || 
      (Config::get('settings.projects') == 'visible') ||
      (Config::get('settings.recipes') == 'visible') ||
      (Config::get('settings.blog') == 'visible')
   )

   <div class="card card-trans-4 mb-2">
      
      <div class="card-header block_header p-2">
         <i class="far fa-star"></i>
         Most Popular Items
      </div>

      <div class="list-group px-1 text-light">

         @if(Config::get('settings.carvings') == 'visible')
            @include('UI.carvings.blocks.popular')
         @endif

         @if(Config::get('settings.projects') == 'visible')
            @include('UI.projects.blocks.popular')
         @endif

         @if(Config::get('settings.recipes') == 'visible')
            @include('UI.recipes.blocks.popular')
         @endif

         @if(Config::get('settings.blog') == 'visible')
            @include('UI.blog.blocks.popular')
         @endif   		

      </div>
   </div>

@endif
