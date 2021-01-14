<table class="table table-hover table-striped">
   <tbody>
      <tr>
         <th>Category</th>
         <td>{{ $project->category }}</td>
      </tr>
      <tr>
         <th>Shop Time</th>
         <td>{{ $project->time_invested ?? "N/A" }}</td>
      </tr>
      <tr>
         <th>Price</th>
         <td>{{ ($project->price ? '$ ' . $project->price . '.00' : 'N/A') }}</td>
      </tr>
      <tr>
         <th>Frontend Views</th>
         <td>{{ $project->views ?? "N/A" }}</td>
      </tr>
      <tr>
         <th>Width <small>(inches)</small></th>
         <td>{{ $project->width ?? "N/A" }}</td>
      </tr>
      <tr>
         <th>Depth <small>(inches)</small></th>
         <td>{{ $project->depth ?? "N/A" }}</td>
      </tr>
      <tr>
         <th>Height <small>(inches)</small></th>
         <td>{{ $project->height ?? "N/A" }}</td>
      </tr>
      <tr>
         <th>Weight <small>(pounds)</small></th>
         <td>{{ $project->weight ?? "N/A" }}</td>
      </tr>
      <tr>
         <th>Completion Date</th>
         <td>{{ ($project->completed_at ? $project->completed_at->format('M d, Y') : "In Progress") }}</td>
      </tr>
   </tbody>
</table>
