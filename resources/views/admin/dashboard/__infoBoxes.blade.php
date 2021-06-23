<!-- Info boxes -->

<div class="row">

   @include('admin.dashboard.infoBoxes.carvings')
   @include('admin.dashboard.infoBoxes.posts')
   @include('admin.dashboard.infoBoxes.projects')
   @include('admin.dashboard.infoBoxes.recipes')

   <!-- fix for small devices only -->
   <div class="clearfix hidden-md-up"></div>

   @include('admin.dashboard.infoBoxes.permissions')
   @include('admin.dashboard.infoBoxes.roles')
   @include('admin.dashboard.infoBoxes.users')

</div><!-- /.row -->
