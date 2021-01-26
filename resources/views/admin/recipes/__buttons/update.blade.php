@if($recipe->user_id == Auth::id() || Auth::user()->can('recipe-edit'))

   <button
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-info"
      type="submit"
      formmethod="POST"
      title="Update Recipe">
      <i class="{{ config('icons.save') }}"></i>
      {{ $btn_label ?? '' }}
   </button>

@endif
