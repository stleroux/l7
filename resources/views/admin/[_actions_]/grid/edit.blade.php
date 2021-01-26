@can($modelName'-edit')
   <a href="{{ route('admin.'.$modelName.'s.edit', $modelName) }}" class="btn btn-sm btn-default" title="Edit {{ ucfirst($modelName) }}">
      <i class="{{ config('icons.edit') }} text-primary"></i>
   </a>
@endcan
