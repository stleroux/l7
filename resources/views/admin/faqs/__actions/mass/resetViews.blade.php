<form action="" method="POST">
   @csrf
   <input type="hidden" name="mass_resetViews_ids" id="mass_resetViews_ids" value="" size="3" />
   <a 
      data-toggle="modal"
      class="btn btn-block btn-default mt-2"
      id="btn_multiresetViews"
      style="display:none"
      data-target="#massResetViews-modal">
      <i class="{{ config('icons.resetViews') }}"></i>
      Reset Views for Selected
   </a>
</form>
