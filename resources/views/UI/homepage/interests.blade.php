{{-- INTERESTS --}}
@if(
      (Config::get('settings.carvings') == 'visible') || 
      (Config::get('settings.projects') == 'visible') ||
      (Config::get('settings.recipes') == 'visible') ||
      (Config::get('settings.blog') == 'visible')
   )

   <div class="card card-trans-0 mb-2 border-red-2">
      <div class="card-header section_header p-2">
         <i class="fas fa-fw fa-glasses"></i>
         Sections of interest on the site
      </div>

      <div class="card-body p-2">
         
         @if(Config::get('settings.carvings') == 'visible')
            <div class="card card-trans-4 mb-2 border-black-2">
               <div class="card-header card_header p-2">
                  <i class="{{ config('icons.projects') }}"></i>
                  {{ $carvings->title }}
               </div>
               <div class="card-body card-trans-0 p-2 border-red-1">
                  {!! $carvings->body !!}
               </div>
            </div>
         @endif

         @if(Config::get('settings.projects') == 'visible')
            <div class="card card-trans-4 mb-2 border-black-2">
               <div class="card-header card_header p-2">
                  <i class="{{ config('icons.projects') }}"></i>
                  {{ $projects->title }}
               </div>
               <div class="card-body card-trans-0 p-2 border-red-1">
                  {!! $projects->body !!}
               </div>
            </div>
         @endif
         
         @if(Config::get('settings.recipes') == 'visible')
            <div class="card card-trans-4 mb-2 border-black-2">
               <div class="card-header card_header p-2">
                  <i class="{{ config('icons.recipes') }}"></i>
                  {{ $recipes->title }}
               </div>
               <div class="card-body p-2 border-red-1">
                  {!! $recipes->body !!}
               </div>
            </div>
         @endif

         @if(Config::get('settings.blog') == 'visible')
            <div class="card card-trans-4 mb-2 border-black-2">
               <div class="card-header card_header p-2">
                  <i class="{{ config('icons.blog') }}"></i>
                  {{ $blog->title }}
               </div>
               <div class="card-body p-2 border-red-1">
                  {!! $blog->body !!}
               </div>
            </div>
         @endif

      </div>
   </div>

@endif
