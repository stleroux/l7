@if($previous)
   <a href="{{ route('admin.'.$modelName.'s.show', $previous) }}"
      class="btn btn-block btn-secondary"
      title="Previous {{ ucfirst($modelName) }}">
      <i class="{{ config('icons.previous') }}"></i>
      Previous {{ ucfirst($modelName) }}
   </a>
@endif
