<div class="card mb-3 p-0 m-0">
   <div class="card-header block_header p-2 m-0">
      <i class="{{ config('buttons.archives') }}"></i>
      Movie Archives
   </div>
   <div class="card-body card_body p-0">
      @if(count($archivesLinks) > 0)
         <ul class="list-group">
            @foreach($archivesLinks as $alink)
               <a href="{{ route('movies.archives', ['year'=>$alink->year, 'month'=>$alink->month]) }}"
                  class="list-group-item list-group-item-action p-1">
                  <i class="{{ config('buttons.archive') }}"></i>
                  {{ $alink->month_name }} - {{ $alink->year }}
                  <div class="badge badge-secondary float-right p-1">
                     {{ $alink->archivesLinks_count }}
                  </div>
               </a>
            @endforeach
         </ul>
      @else
         <div class="text text-center">No Data Available</div>
      @endif
   </div>
</div>