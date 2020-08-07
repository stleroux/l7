{{-- NEW USER --}}
@auth
   @if(auth::user()->login_count <= Config::get('settings.login_count_warning'))
      <div class="card card-trans-0 mb-2 border-red-2">

         <div class="card-header section_header p-2">New User</div>
         
         <div class="card-body card-trans-2 p-2 text-light">
            <p>Welcome to the site new user.</p>
            <p>We hope you will enjoy your stay with us.</p>
            <p>Feel free to browse around.</p>
         </div>

      </div>
   @endif
@endauth
