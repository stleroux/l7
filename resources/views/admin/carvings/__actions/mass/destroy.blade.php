<form action="{{ route('admin.carvings.mass_destroy') }}" method="post" class="">
   @csrf
   @method('DELETE')
   <input type="hidden" name="mass_destroy_ids" id="mass_destroy_ids" value="" class="bg-danger" size="3" />
   <a data-toggle="modal"
      class="btn btn-block btn-outline-pink mt-2"
      id="btn_multidestroy"
      style="display:none"
      data-target="#massDestroy-modal">
      <i class="{{ config('icons.trash') }}"></i>
      Trash Selected
   </a>
</form>
