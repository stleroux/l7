<div class="card-header d-none d-xl-block pt-0 pb-2 text-center">
   <div class="btn-group" role="group">
   @foreach($project->categoriesOptions() as $categoryOptionKey => $categoryOptionValue)
      @if($categoryOptionKey == 'select')
         <a href="{{ route('projects.index') }}"
            class="btn btn-sm btn-{{ (request()->is('projects/all/*') || request()->is('projects')) ? 'dark' : 'alphabet' }}">
            All Projects
         </a>
      @else
         <a href="{{ route('projects.index', $categoryOptionKey) }}"
            class="btn btn-sm btn-{{ request()->is('projects/'.$categoryOptionKey.'*') ? 'dark' : 'alphabet' }} p-1">
            {{ $categoryOptionValue }}
         </a>
      @endif
   @endforeach
   </div>
</div>

{{-- Used on small screens only --}}
<div class="card-header d-block d-xl-none pt-0 pb-3 text-center">
   <select name="filter" class="form-control" onchange="if (this.value) window.location.href=this.value">
      @foreach($project->categoriesOptions() as $categoryOptionKey => $categoryOptionValue)
         <option value="{{ route('projects.index', $categoryOptionKey) }}" {{ Request()->filter == $categoryOptionKey ? ' selected' : '' }}>
            @if($categoryOptionValue == 'Select One')
               All Projects
            @else
               {{ $categoryOptionValue }}
            @endif
         </option>
      @endforeach
   </select>
</div>
