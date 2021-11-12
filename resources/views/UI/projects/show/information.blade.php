<div class="card card-trans-4 card-outline card-primary text-dark mb-2">

   <div class="card-header bg-info p-1">
      <div class="card-title">
         <i class="{{ config('icons.info') }}"></i>
         Information
      </div>
   </div>

   <div class="card-body p-0">
      <table class="table table-sm table-hover table-striped text-dark">
         <tbody class="">
            <tr>
               <th>Category</th>
               <td>{{ $project->category }}</td>
            </tr>
            <tr>
               <th>Frontend Views</th>
               <td>
                  {{-- {{ $project->views ?? "N/A" }} --}}
                  {{ views($project)->count() }}
               </td>
            </tr>
            <tr>
               <th>Views Last Month</th>
               <td>
                  {{ views($project)->period(CyrildeWit\EloquentViewable\Support\Period::pastMonths(1))->count() }}
               </td>
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
            <tr>
               <th>Likes</th>
               <td>{{ $project->likes()->count() }}</td>
            </tr>
         </tbody>
      </table>
   </div>

</div>
