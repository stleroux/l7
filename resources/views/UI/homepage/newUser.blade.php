{{-- NEW USER --}}
@auth
   @if(auth::user()->login_count <= config('settings.loginCountWarning'))
      <div class="card card-trans-0 mb-2 border-red-2">

         <div class="card-header section_header p-2">
            <i class="{{ config('icons.user') }}"></i>
            {{ $newUser->title }}
         </div>
         
         <div class="card-body card-trans-4 p-2">
            {!! $newUser->body !!}
         </div>

      </div>
   @endif
@endauth
