<div class="card card-primary">

   <div class="card-header p-2">Actions</div>

   <div class="card-body p-1">
   
      @include('admin.actions.common.back', ['modelName'=>'user'])
      @include('admin.actions.common.updateAndClose')
      @include('admin.actions.common.updateAndContinue')
      @include('admin.actions.common.reset')

      @if($user->username != 'admin')
         <hr />
         @if($user->account_status)
            @include('admin.actions.common.disable')
         @else
            @include('admin.actions.common.enable')         
         @endif
      @endif
   
   </div>

</div>
