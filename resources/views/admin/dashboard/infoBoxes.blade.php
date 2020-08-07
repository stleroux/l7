<!-- Info boxes -->
<div class="row">

   <div class="col-12 col-sm-6 col-md-2">
      <div class="info-box">
         <span class="info-box-icon bg-info elevation-1">
            <i class="fas fa-cog"></i>
         </span>

         <div class="info-box-content">
            <span class="info-box-text">Recipes</span>
            <span class="info-box-number">
               {{-- {{ DB::table("recipes")->count() }} --}}
            </span>
         </div><!-- /.info-box-content -->
      </div><!-- /.info-box -->
   </div><!-- /.col -->

   <div class="col-12 col-sm-6 col-md-2">
      <a href="{{ route('admin.projects.index') }}">
         <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1">
               <i class="fas fa-thumbs-up"></i>
            </span>

            <div class="info-box-content">
               <span class="info-box-text">Projects</span>
               <span class="info-box-number">
                  {{-- {{ DB::table("projects")->count() }} --}}
                  {{ $projectsCount }}
               </span>
            </div><!-- /.info-box-content -->
         </div><!-- /.info-box -->
      </a>
   </div><!-- /.col -->

   <!-- fix for small devices only -->
   <div class="clearfix hidden-md-up"></div>

   <div class="col-12 col-sm-6 col-md-2">
      <a href="{{ route('admin.users.index') }}">
         <div class="info-box mb-3">
            <span class="info-box-icon bg-primary elevation-2">
               <i class="fas fa-users"></i>
            </span>

            <div class="info-box-content">
               <span class="info-box-text">Users</span>
               <span class="info-box-number">
                  {{-- {{ DB::table("users")->count() }} --}}
                  {{ $usersCount }}
               </span>
            </div><!-- /.info-box-content -->
         </div><!-- /.info-box -->
      </a>
   </div><!-- /.col -->

   <div class="col-12 col-sm-6 col-md-2">
      <a href="{{ route('admin.permissions.index') }}">
         <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1">
               <i class="fas fa-users"></i>
            </span>

            <div class="info-box-content">
               <span class="info-box-text">Permissions</span>
               <span class="info-box-number">
                  {{-- {{ DB::table("permissions")->count() }} --}}
                  {{ $permissionsCount }}
               </span>
            </div><!-- /.info-box-content -->
         </div><!-- /.info-box -->
      </a>
   </div><!-- /.col -->

   <div class="col-12 col-sm-6 col-md-2">
      <a href="{{ route('admin.roles.index') }}">
         <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1">
               <i class="fas fa-users"></i>
            </span>

            <div class="info-box-content">
               <span class="info-box-text">Roles</span>
               <span class="info-box-number">
                  {{-- {{ DB::table("roles")->count() }} --}}
                  {{ $rolesCount }}
               </span>
            </div><!-- /.info-box-content -->
         </div><!-- /.info-box -->
      </a>
   </div><!-- /.col -->

</div><!-- /.row -->
