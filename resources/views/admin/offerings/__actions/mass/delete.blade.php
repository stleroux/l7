<form action="{{ route('admin.faqs.mass_delete') }}" method="post" class="">
   @csrf
   @method('DELETE')
   <input type="hidden" name="mass_delete_ids" id="mass_delete_ids" value="" class="bg-warning" size="3" />
   <a data-toggle="modal"
      class="btn btn-block btn-outline-danger mt-2"
      id="btn_multidelete"
      style="display:none"
      data-target="#massDelete-modal">
      <i class="{{ config('icons.delete') }}"></i>
      Delete Selected
   </a>
</form>
