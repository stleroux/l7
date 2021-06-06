<div class="card card-primary">
   <div class="card-header p-2">
      {{-- <div class="card-title"> --}}
         Information
      {{-- </div> --}}
   </div>
   <div class="card-body p-0">

      <table class="table table-hover table-striped">
         <tbody>
            <tr>
               <th class="m-0 p-2">Category</th>
               <td class="m-0 p-2">{{ $carving->category }}</td>
            </tr>
            <tr>
               <th class="m-0 p-2">Design Time</th>
               <td>
                  @if($carving->design_time_hrs && $carving->design_time_mins)
                     {{ $carving->design_time_hrs > 1 ? $carving->design_time_hrs . ' hrs' : $carving->design_time_hrs .' hr' }}
                     {{ $carving->design_time_mins > 1 ? $carving->design_time_mins . ' mins' : $carving->design_time_mins .' min' }}
                  @else
                     N/A
                  @endif
               </td>
            </tr>
            <tr>
               <th class="m-0 p-2">Machine Time</th>
               <td>
                  @if($carving->machine_time_hrs && $carving->machine_time_mins)
                     {{ $carving->machine_time_hrs > 1 ? $carving->machine_time_hrs . ' hrs' : $carving->machine_time_hrs .' hr' }}
                     {{ $carving->machine_time_mins > 1 ? $carving->machine_time_mins . ' mins' : $carving->machine_time_mins .' min' }}
                  @else
                     N/A
                  @endif
               </td>
            </tr>
            <tr>
               <th class="m-0 p-2">Price</th>
               <td class="m-0 p-2">{{ ($carving->price ? '$ ' . $carving->price . '.00' : 'N/A') }}</td>
            </tr>
            <tr>
               <th class="m-0 p-2">Views</th>
               <td class="m-0 p-2">{{ $carving->views ?? "N/A" }}</td>
            </tr>
            <tr>
               <th class="m-0 p-2">Width (X)</th>
               <td class="m-0 p-2">{{ $carving->width ?? "N/A" }}
                  @if($carving->width)
                     <small>inche(s)</small>
                  @endif
               </td>
            </tr>
            <tr>
               <th class="m-0 p-2">Height (Y)</th>
               <td class="m-0 p-2">{{ $carving->height ?? "N/A" }}
                  @if($carving->height)
                     <small>inche(s)</small>
                  @endif
               </td>
            </tr>
            <tr>
               <th class="m-0 p-2">Depth (Z)</th>
               <td class="m-0 p-2">{{ $carving->depth ?? "N/A" }}
                  @if($carving->depth)
                     <small>inche(s)</small>
                  @endif
               </td>
            </tr>

            <tr>
               <th class="m-0 p-2">Weight</th>
               <td class="m-0 p-2">{{ $carving->weight ?? "N/A" }}
                  @if($carving->weight)
                     <small>(pounds)</small>
                  @endif
               </td>
            </tr>
            <tr>
               <th class="m-0 p-2">Completion Date</th>
               <td class="m-0 p-2">{{ ($carving->completed_at ? $carving->completed_at->format('M d, Y') : "In Progress") }}</td>
            </tr>
         </tbody>
      </table>

   </div>
</div>


