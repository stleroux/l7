{{-- <li class="nav-item dropdown user user-menu">
	<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
		<img src="{{ asset('/dist/img/user2-160x160.jpg') }}" class="user-image img-circle elevation-2 alt="User Image">
		<span class="hidden-xs">{{ auth::user()->name }}</span>
	</a>
	<ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
		<!-- User image -->
		<li class="user-header bg-primary">
			<img src="{{ asset('/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">

			<div class="mb-0">
				<p>{{ Auth::user()->name }}</p>
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
			<div class="float-left">
				<a href="#" class="btn btn-default btn-flat">Profile</a>
			</div>
			<div class="float-right">
				<!-- <a href="#" class="btn btn-default btn-flat">Sign out</a> -->
				<a class="btn btn-default btn-flat" href="{{ route('logout') }}"
					onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">
					{{ __('Logout') }}
				</a>

				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					@csrf
				</form>
			</div>
		</li>
	</ul>
</li>
 --}}

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
         <div class="float-left">
            <a href="{{ route('profile.edit', Auth::user()->id) }}" class="btn btn-outline-primary">Edit Profile</a>
         </div>
         <div class="float-right">
            <a class="btn btn-outline-danger" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
               {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
               @csrf
            </form>
         </div>
      </li>

   </ul>

</li>