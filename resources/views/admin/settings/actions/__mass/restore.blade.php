<form action="" method="POST">
   @csrf
   <input type="hidden" name="mass_restore_ids" id="mass_restore_ids" value="" size="3" />
   <a 
      data-toggle="modal"
      class="btn btn-block btn-outline-primary mt-2"
      id="btn_multirestore"
      style="display:none"
      data-target="#massRestore-modal">
      <i class="{{ config('icons.restore') }}"></i>
      Restore Selected
   </a>
</form>
