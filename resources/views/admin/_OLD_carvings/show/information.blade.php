<table class="table table-hover table-striped">
   <tbody>
      <tr>
         <th>Category</th>
         <td>{{ $carving->category }}</td>
      </tr>
      <tr>
         <th>Shop Time</th>
         <td>{{ $carving->time_invested ?? "N/A" }}</td>
      </tr>
      <tr>
         <th>Price</th>
         <td>{{ ($carving->price ? '$ ' . $carving->price . '.00' : 'N/A') }}</td>
      </tr>
      <tr>
         <th>Frontend Views</th>
         <td>{{ $carving->views ?? "N/A" }}</td>
      </tr>
      <tr>
         <th>Width <small>(inches)</small></th>
         <td>{{ $carving->width ?? "N/A" }}</td>
      </tr>
      <tr>
         <th>Depth <small>(inches)</small></th>
         <td>{{ $carving->depth ?? "N/A" }}</td>
      </tr>
      <tr>
         <th>Height <small>(inches)</small></th>
         <td>{{ $carving->height ?? "N/A" }}</td>
      </tr>
      <tr>
         <th>Weight <small>(pounds)</small></th>
         <td>{{ $carving->weight ?? "N/A" }}</td>
      </tr>
      <tr>
         <th>Completion Date</th>
         <td>{{ ($carving->completed_at ? $carving->completed_at->format('M d, Y') : "In Progress") }}</td>
      </tr>
   </tbody>
</table>
