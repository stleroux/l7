<form action="{{ route('admin.users.mass_approve') }}" method="post" class="">
   @csrf
   {{-- @method('DELETE') --}}
   <input type="hidden" name="mass_approve_ids" id="mass_approve_ids" value="" size="3" />
   <a data-toggle="modal"
      class="btn btn-block btn-default mt-2"
      id="btn_multiapprove"
      style="display:none"
      data-target="#massApprove-modal">
      <i class="{{ config('icons.approve') }}"></i>
      Approve Selected
   </a>
</form>
