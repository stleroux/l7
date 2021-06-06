{{-- <a href="{{ route('mylinks.show', $link) }}" class="btn btn-sm btn-default">
   <i class="{{ config('icons.view') }} text-primary"></i>
   View
</a> --}}

{{-- @if($mylink->status == 'New') --}}

   <a href="{{ route('mylinks.edit', $link) }}" class="btn btn-sm btn-default">
      <i class="{{ config('icons.edit') }} text-primary"></i>
      Edit
   </a>

   <a href="#"
      class="destroy-model btn btn-sm btn-default"
      data-toggle="modal"
      data-target="#destroyModal"
      data-id="{{ $link->id }}"
      data-url="{{ url('mylinks', $link->id) }}">
      <i class="{{ config('icons.trash') }} text-pink"></i>
      Trash
   </a>

{{-- @endif --}}
