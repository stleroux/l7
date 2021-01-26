<div class="card card-primary">
   <div class="card-header">
      <div class="card-title">Information</div>
   </div>
   <div class="card-body p-0">

      <table class="table table-hover table-striped">
         <tbody>
            <tr>
               <th>Category</th>
               <td>{{ $carving->category }}</td>
            </tr>
            <tr>
               <th>Design Time</th>
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
               <th>Machine Time</th>
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
               <th>Price</th>
               <td>{{ ($carving->price ? '$ ' . $carving->price . '.00' : 'N/A') }}</td>
            </tr>
            <tr>
               <th>Views</th>
               <td>{{ $carving->views ?? "N/A" }}</td>
            </tr>
            <tr>
               <th>Width (X)</th>
               <td>{{ $carving->width ?? "N/A" }}
                  @if($carving->width)
                     <small>inche(s)</small>
                  @endif
               </td>
            </tr>
            <tr>
               <th>Height (Y)</th>
               <td>{{ $carving->height ?? "N/A" }}
                  @if($carving->height)
                     <small>inche(s)</small>
                  @endif
               </td>
            </tr>
            <tr>
               <th>Depth (Z)</th>
               <td>{{ $carving->depth ?? "N/A" }}
                  @if($carving->depth)
                     <small>inche(s)</small>
                  @endif
               </td>
            </tr>

            <tr>
               <th>Weight</th>
               <td>{{ $carving->weight ?? "N/A" }}
                  @if($carving->weight)
                     <small>(pounds)</small>
                  @endif
               </td>
            </tr>
            <tr>
               <th>Completion Date</th>
               <td>{{ ($carving->completed_at ? $carving->completed_at->format('M d, Y') : "In Progress") }}</td>
            </tr>
         </tbody>
      </table>

   </div>
</div>


