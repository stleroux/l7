<li class="nav-item dropdown user user-menu">
   
   <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
      <img src="{{ asset('/dist/img/user2-160x160.jpg') }}" class="user-image img-circle elevation-2" alt="User Image">
      <span class="hidden-xs">{{ auth::user()->first_name }} {{ auth::user()->last_name }}</span>
      <i class="fas fa-fw fa-caret-down"></i>
   </a>
   
   <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
      <!-- User image -->
      <li class="user-header bg-primary">
         <img src="{{ asset('/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">

         <div class="mb-0">
         	<p>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }} ({{ Auth::user()->username }})</p>
            <p>{{ Auth::user()->email }}</p>
            <p>
               @foreach(Auth::user()->roles->pluck('name') as $role)
                  {{ ucfirst($role) }}
                  @if(!$loop->last)
                     {{ '-' }}
                  @endif
               @endforeach
            </p>
            <p>
               <small>Member since {{ Auth::user()->created_at->toFormattedDateString() }}</small>
            </p>
               
         </div>
      </li>

      <!-- Menu Body -->
      <li class="user-body">
         <div class="row">
            <div class="col-4 text-center">
               <a href="#">Followers</a>
            </div>
            <div class="col-4 text-center">
               <a href="#">Sales</a>
            </div>
            <div class="col-4 text-center">
               <a href="#">Friends</a>
            </div>
         </div>
         <!-- /.row -->
      </li>

      <!-- Menu Footer-->
      <li class="user-footer">
         
         {{-- <div class="px-1 py-0"><small>Features</small></div> --}}
         <div class="form-row pb-1">
            <div class="col pt-1">
               <a href="{{ route('features.create') }}" class="btn btn-outline-secondary btn-xs btn-block mt-0">
   			      <i class="{{ config('icons.feature') }} text-success"></i>
   			      Request A Feature
   		       </a>
            </div>
         
            <div class="col">
               <a href="{{ route('features.index') }}" class="btn btn-outline-secondary btn-xs btn-block mt-1">
                  My Requested Features
               </a>
            </div>
         </div>

         {{-- <div class="px-1 py-0"><small>Bugs</small></div> --}}
         <div class="form-row pb-1">
            <div class="col">
               <a href="{{ route('bugs.create') }}" class="btn btn-outline-secondary btn-xs btn-block mt-1">
                  Report A Bug
               </a>
            </div>
            <div class="col">
               <a href="{{ route('bugs.index') }}" class="btn btn-outline-secondary btn-xs btn-block mt-1">
                  My Bug Reports
               </a>
            </div>
         </div>

         {{-- <div class="form-row">
            <div class="col"> --}}
         {{--       <a href="{{ route('features.create') }}" class="btn btn-outline-primary btn-xs btn-block mt-1">
                  Request <br /> a Feature
               </a> --}}
            {{-- </div>
            <div class="col"> --}}
               {{-- <a href="{{ route('features.index') }}" class="btn btn-outline-primary btn-xs btn-block mt-1">
                  My Feature Requests
               </a> --}}
            {{-- </div>
         </div> --}}

         {{-- <div class="px-1 py-0"><small>Profile</small></div> --}}
         <div class="form-row pb-1">
            <div class="col">
               <a href="{{ route('profile.show', Auth::user()->id) }}" class="btn btn-outline-primary btn-xs btn-block mt-1">
                  View Profile
               </a>
            </div>

            <div class="col">
               <a href="{{ route('profile.edit', Auth::user()->id) }}" class="btn btn-outline-primary btn-xs btn-block mt-1">
               	Edit Profile
               </a>
            </div>
         </div>

         <div class="form-row">
            <div class="col">
            	<a href="{{ route('profile.resetPwd', Auth::user()->id) }}" class="btn btn-outline-primary btn-xs btn-block mt-1">
            		Change Password
      	     </a>
           </div>
        </div>

        {{-- <div class="p-0">&nbsp;</div> --}}

         <a class="btn btn-outline-danger btn-sm btn-block mt-3" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
         </a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
         </form>


      </li>

   </ul>

</li>

