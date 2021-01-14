<div class="card card-outline card-primary">

   <div class="card-header bg-info">
      <div class="card-title font-weight-bold">
         <i class="{{ config('icons.info') }}"></i>
         Information
      </div>
   </div>

   <div class="card-body p-0">
      <table class="table table-hover table-striped text-dark">
         <tbody class="">
            <tr>
               <th>Category</th>
               <td>{{ $project->category }}</td>
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
               <th>Price</th>
                  @auth
                     <td>{{ ($project->price ? '$ ' . $project->price . '.00' : 'N/A') }}</td>
                  @else
                     <td>Login for details</td>
                  @endauth
            </tr>
         </tbody>
      </table>
   </div>

</div>
