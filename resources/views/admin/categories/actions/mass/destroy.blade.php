<form action="{{ route('admin.categories.mass_destroy') }}" method="post" class="">
   @csrf
   @method('DELETE')
   <input type="hidden" name="mass_destroy_ids" id="mass_destroy_ids" value="" size="3" />
   <a data-toggle="modal"
      class="btn btn-block btn-outline-pink"
      id="btn_multidestroy"
      style="display:none"
      data-target="#massDestroy-modal">
      <i class="{{ config('icons.trash') }}"></i>
      Trash Selected
   </a>
</form>
