<!-- Info boxes -->

<div class="row">

   @include('admin.dashboard.infoBoxes.recipes')
   @include('admin.dashboard.infoBoxes.posts')
   @include('admin.dashboard.infoBoxes.projects')

   <!-- fix for small devices only -->
   <div class="clearfix hidden-md-up"></div>

   @include('admin.dashboard.infoBoxes.users')
   @include('admin.dashboard.infoBoxes.permissions')
   @include('admin.dashboard.infoBoxes.roles')

</div><!-- /.row -->
