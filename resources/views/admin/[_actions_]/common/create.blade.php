@can($modelName.'-create')
   <a href="{{ route('admin.bugs.create') }}" class="btn btn-block btn-outline-success" title="Create {{ ucfirst($modelName) }}">
      <i class="{{ config('icons.add') }}"></i>
      
      @if($modelName == 'bug')
      	Report {{ ucfirst($modelName) }}
      @elseif($modelName == 'feature')
      	Request {{ ucfirst($modelName) }}
      @else
      	Create {{ ucfirst($modelName) }}
      @endif
      
   </a>
@endcan
