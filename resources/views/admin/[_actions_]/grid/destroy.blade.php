@can($modelName.'-delete')
   <a href="#"
      class="destroy-model btn btn-sm btn-default"
      data-toggle="modal"
      data-target="#destroyModal"
      data-id="{{ $modelName->id }}"
      data-url="{{ url('admin/'.$modelName.'s', $modelName->id) }}"
      title="Trash {{ ucfirst($modelName) }}">
      <i class="{{ config('icons.trash') }} text-pink"></i>
   </a>
@endcan
