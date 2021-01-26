<div class="card card-primary">

   <div class="card-header p-2">Actions</div>

   <div class="card-body p-1">
   
      @include('admin.users.actions.common.back')
      @include('admin.users.actions.common.updateAndClose')
      @include('admin.users.actions.common.updateAndContinue')
      @include('admin.users.actions.common.reset')
      
      <hr />

      @if($user->account_status)
         @include('admin.users.actions.common.disable')
      @else
         @include('admin.users.actions.common.enable')         
      @endif
   
   </div>

</div>
