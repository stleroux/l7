<!-- USERS -->

@if(Auth::user()->can('user-manage') || Auth::user()->hasRole('admin'))

   <div class="col col-md-6 col-xl-12">
      <a href="{{ route('admin.users.index') }}">
         <div class="info-box mb-3">
            <span class="info-box-icon bg-primary elevation-2">
               <i class="{{ config('icons.users') }}"></i>
            </span>

            <div class="info-box-content">
               <span class="info-box-text h4">Users</span>
               <span class="info-box-text">
                  Active : {{ $usersActiveCount }}
                  <br />
                  Inactive : {{ $usersInactiveCount }}              
               </span>
               <span class="info-box-number">
                  Total : {{ $usersTotalCount }}
               </span>
            </div><!-- /.info-box-content -->
         </div><!-- /.info-box -->
      </a>
   </div><!-- /.col -->

@endif
