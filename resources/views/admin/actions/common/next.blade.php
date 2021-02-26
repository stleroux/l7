@if($next)
   <a href="{{ route('admin.'.$modelName.'s.show', $next) }}"
      class="btn btn-block btn-secondary"
      title="Next {{ ucfirst($modelName) }}">
      Next {{ ucfirst($modelName) }}
      <i class="{{ config('icons.next') }}"></i>
   </a>
@endif
