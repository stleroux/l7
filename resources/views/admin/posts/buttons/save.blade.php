<button
   class="btn {{ $size ? 'btn-'.$size : '' }} btn-success"
   type="submit"
   formmethod="POST"
   title="Save Post">
   <i class="{{ Config::get('icons.save') }}"></i>
   {{ $btn_label ?? '' }}
</button>