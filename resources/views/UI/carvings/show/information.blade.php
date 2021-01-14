<div class="card card-outline card-info">

   <div class="card-header bg-primary">
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
               <td>{{ $carving->category }}</td>
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
               <th>Price</th>
                  @auth
                     <td>{{ ($carving->price ? '$ ' . $carving->price . '.00' : 'N/A') }}</td>
                  @else
                     <td>Login for details</td>
                  @endauth
            </tr>
         </tbody>
      </table>
   </div>

</div>
