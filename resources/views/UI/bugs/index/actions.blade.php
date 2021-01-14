<a href="{{ route('bugs.show', $bug) }}" class="btn btn-sm btn-default">
   <i class="{{ config('icons.view') }} text-primary"></i>
   View
</a>

@if($bug->status == 'New')

   <a href="{{ route('bugs.edit', $bug) }}" class="btn btn-sm btn-default">
      <i class="{{ config('icons.edit') }} text-primary"></i>
      Edit
   </a>

   <a href="#"
      class="destroy-model btn btn-sm btn-default"
      data-toggle="modal"
      data-target="#destroyModal"
      data-id="{{ $bug->id }}"
      data-url="{{ url('bugs', $bug->id) }}">
      <i class="{{ config('icons.trash') }} text-pink"></i>
      Trash
   </a>

@endif
