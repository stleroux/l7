<!-------------------------------------------------------------------------------------------------------------
ACTIONS EXPLAINED
-------------------------------------------------------------------------------------------------------------->
<div class="card mb-2">
   <div class="card-header bg-info p-1">Actions Explained</div>
   <div class="card-body p-1">

      @include('help.UI._common_.save_and_close_button', ['name'=>'Bug Report'])
      @include('help.UI._common_.save_and_continue_button')
      @include('help.UI._common_.save_and_new_button', ['name'=>'Bug Report'])
      @include('help.UI._common_.reset_form_button')
      @include('help.UI._common_.cancel_button')
      @include('help.UI._common_.help_button')

   </div>
</div>
