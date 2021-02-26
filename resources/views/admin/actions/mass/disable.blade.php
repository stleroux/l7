<form action="{{ route('admin.users.mass_disable') }}" method="post" class="">
   @csrf
   {{-- @method('DELETE') --}}
   <input type="hidden" name="mass_disable_ids" id="mass_disable_ids" value="" size="3" />
   <a data-toggle="modal"
      class="btn btn-block btn-outline-pink mt-2"
      id="btn_multidisable"
      style="display:none"
      data-target="#massDisable-modal">
      <i class="{{ config('icons.disabled') }}"></i>
      Disable Selected
   </a>
</form>
