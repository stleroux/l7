<form action="{{ route('admin.categories.mass_delete') }}" method="post" class="mt-2">
   @csrf
   @method('DELETE')
   <input type="hidden" name="mass_delete_ids" id="mass_delete_ids" value="" size="3" />
   <a data-toggle="modal"
      class="btn btn-block btn-outline-danger"
      id="btn_multidelete"
      style="display:none"
      data-target="#massDelete-modal">
      <i class="fas fa-trash nav-icon"></i>
      Delete Selected
   </a>
</form>
