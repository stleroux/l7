<button
   class="btn {{ $size ? 'btn-'.$size : '' }} btn-success"
   type="submit"
   formmethod="POST"
   title="Save Recipe">
   <i class="{{ config('icons.save') }}"></i>
   {{ $btn_label ?? '' }}
</button>
